<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 9/1/2015
 * Time: 3:48 PM
 */

namespace HideMyAssAPI;


use Curl\Curl;
use Symfony\Component\DomCrawler\Crawler;

class HideMyAssAPI
{
    /**
     * @var Curl
     */
    protected $curl;
    public function __construct(){
        $this->curl = new Curl();
    }
    public function __destruct(){
        $this->curl->close();
    }
    /**
     * @return string
     */
    protected function getProxyTable(){
        $sourceCode = $this->getSouceCode();
        $crawler = new Crawler($sourceCode);
        $tableCrawler = $crawler->filterXPath('//*[@id="listable"]/tbody/tr');
        $proxies = array();
        foreach($tableCrawler as $el){
            $rowCrawler = new Crawler($el);
            /**
             * Get IP
             */
            $ipCrawler = $rowCrawler->filterXPath("//td[2]");
            $ip = $this->clearIpText($ipCrawler);
            if(!empty($ip)){
                /**
                 * Get port
                 */
                $portCrawler = $rowCrawler->filterXPath("//td[3]");
                $port = trim($portCrawler->text());
                if(!empty($port)){
                    /**
                     * Get Type
                     */
                    $typeCrawler = $rowCrawler->filterXPath("//td[7]");
                    $type = trim($typeCrawler->text());
                    switch($type){
                        case "HTTP":
                            $type=CURLPROXY_HTTP;
                            break;
                        case "HTTPS":
                            $type=CURLPROXY_HTTP;
                            break;
                    }
                    $proxies[] =new Proxy($ip, $port, $type);
                }
            }

        }
        return $proxies;
    }

    /**
     * @param $ipCrawler
     * @return string
     */
    protected function clearIpText($ipCrawler){
        $html = $ipCrawler->html();
        /**
         * Remove new link
         */
        $html = str_replace("\n", '', $html);
        /**
         * Remove style block
         */

        $regex = "/(<style>(?:.*)<\\/style>)/";
        $html = preg_replace($regex, '', $html);
        /**
         * Remove div with invisible
         */
        $regex = "/(<(?:span|div) style=\"display:none\">(?:\\w+)<\\/(?:span|div)>)/i";
        $html = preg_replace($regex, '', $html);
        /**
         * Remove block with invisible class
         */
        $styleCrawler = $ipCrawler->filterXPath("//style");
        $css = $styleCrawler->html();
        $inVisibleClass = $this->getInVisibleClass($css);
        $inVisibleClass= implode("|", $inVisibleClass);
        $regex = "/(<(?:span|div) class=\\\"(?:".$inVisibleClass.")\\\">(?:\\w+)<\\/(?:span|div)>)/i";
        $html = preg_replace($regex, '', $html);
        $plaintext = trim(strip_tags($html));
        if (!filter_var($plaintext, FILTER_VALIDATE_IP) === false){
            return  $plaintext;
        }
        else
        {
            return null;
        }
    }
    protected function getInVisibleClass($style){
        $regex = "/\\.(.*){display:none}/i";
        preg_match_all($regex, $style, $matches);
        if($matches){
            return $matches[1];
        }
        else{
            return array();
        }
    }
    /**
     * @return string
     */
    protected function getSouceCode(){
        if(!$this->curl->response){
            $this->curl->get('http://proxylist.hidemyass.com/');
        }
        return $this->curl->response;
    }

    /**
     * @return Proxy
     */
    public function getProxy(){
        return $this->getProxyTable();
    }

}