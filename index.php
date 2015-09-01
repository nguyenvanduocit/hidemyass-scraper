<?php
require_once __DIR__.'/vendor/autoload.php';
use \Curl\Curl;
use Symfony\Component\DomCrawler\Crawler;

$curl = new Curl();
$curl->get('http://proxylist.hidemyass.com/');
$html = <<<'HTML'
<table class="hma-table" id="listable" rel="50">
                    <!-- table headers -->
                    <thead>
                        <tr>
                            <th>Last Update</th>
                            <th>IP Address</th>
                            <th>Port</th>
                           <th>Country</th>
                            <th>Speed</th>
                            <th>Connection Time</th>
                            <th>Type</th>
                            <th>Anon</th>
                        </tr>
                    </thead>
                    <!-- table rows -->
                    <tbody><tr class="altshade" style="display: table-row;" rel="19150799"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.WzBo{display:none}.PL_8{display:inline}</style><span style="display: inline">120</span><span style="display: inline">.</span><span style="display:none">10</span><span class="WzBo">10</span><span class="186">26</span><span style="display:none">40</span><div style="display:none">40</div><span class="WzBo">43</span><span class="WzBo">98</span><div style="display:none">98</div><span style="display:none">104</span><div style="display:none">104</div><span style="display:none">107</span><span class="WzBo">107</span><span style="display:none">130</span><span class="WzBo">130</span><div style="display:none">130</div><span class="WzBo">136</span><div style="display:none">136</div><div style="display:none">144</div><span style="display:none">157</span><div style="display:none">157</div><span class="WzBo">161</span><span style="display:none">216</span><span></span><span style="display:none">234</span><span></span><span></span><span style="display: inline">.</span><span class="WzBo">110</span><div style="display:none">110</div><span style="display:none">125</span><span class="WzBo">180</span><span></span>192<span class="WzBo">231</span><div style="display:none">231</div><span class="WzBo">240</span><div style="display:none">240</div><span class="PL_8">.</span><span style="display:none">25</span><span class="WzBo">25</span><div style="display:none">25</div><span style="display:none">33</span><span></span><span style="display:none">97</span><span style="display:none">110</span><span class="WzBo">110</span>127<span style="display:none">174</span><span class="WzBo">174</span><div style="display:none">174</div><span style="display:none">180</span><span class="WzBo">180</span><span style="display:none">227</span><span></span></span></td><td>3128</td><td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span></td><td> <div class="progress-indicator" style="width: 114px" value="6662" levels="speed" rel="6662"><div class="indicator" style="width: 33%; background-color: rgb(237, 28, 36)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="625" value="625" levels="speed"><div class="indicator" style="width: 88%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTPS</td><td nowrap="">High +KA</td></tr><tr class="" style="display: table-row;" rel="19150807"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.U17q{display:none}.mUHn{display:inline}.k1lo{display:none}.nDc_{display:inline}.h3-m{display:none}.HlJ3{display:inline}.Spoi{display:none}.uXTJ{display:inline}</style><span class="218">111</span><div style="display:none">216</div><span style="display: inline">.</span><span></span><span style="display:none">96</span><span class="h3-m">106</span><span></span><span></span><span style="display:none">115</span><span class="k1lo">115</span><span></span><span class="k1lo">116</span><span style="display:none">149</span><span></span><span style="display:none">151</span><span class="U17q">151</span><span class="h3-m">153</span><div style="display:none">153</div><span style="display: inline">161</span><span style="display:none">223</span><div style="display:none">223</div><span class="Spoi">226</span><div style="display:none">226</div><span style="display:none">246</span><span class="U17q">246</span><div style="display:none">246</div>.<span style="display: inline">126</span><span style="display:none">251</span><span class="k1lo">251</span><span class="nDc_">.</span>98</span></td><td>80</td><td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span></td><td> <div class="progress-indicator" style="width: 114px" value="1051" levels="speed" rel="1051"><div class="indicator" style="width: 89%; background-color: rgb(0, 173, 173)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="344" value="344" levels="speed"><div class="indicator" style="width: 93%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTPS</td><td nowrap="">High +KA</td></tr><tr class="altshade" style="display: table-row;" rel="19150792"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.oDmi{display:none}.lEwy{display:inline}.Wpej{display:none}.qVdO{display:inline}.DaGT{display:none}.L6mN{display:inline}.d8Zu{display:none}.LOAj{display:inline}</style><span style="display:none">36</span><span style="display:none">104</span><span class="oDmi">104</span><span style="display: inline">115</span><span style="display:none">178</span><span></span><div style="display:none">186</div><span style="display:none">219</span><span></span>.<span class="L6mN">159</span><span class="qVdO">.</span><span class="LOAj">5</span><span style="display:none">26</span><div style="display:none">26</div><span style="display:none">111</span><span class="d8Zu">111</span><span></span><span class="240">.</span>247</span></td><td>80</td><td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span></td><td> <div class="progress-indicator" style="width: 114px" value="5950" levels="speed" rel="5950"><div class="indicator" style="width: 41%; background-color: rgb(255, 204, 0)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="307" value="307" levels="speed"><div class="indicator" style="width: 94%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTP</td><td nowrap="">High</td></tr><tr class="" style="display: table-row;" rel="19150803"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.GN-U{display:none}.AUFp{display:inline}.pmaO{display:none}.x29p{display:inline}.DjDm{display:none}.q8Z7{display:inline}.FmSt{display:none}.ZchR{display:inline}</style><span style="display:none">105</span><div style="display:none">105</div><span class="q8Z7">120</span><span class="91">.</span><span class="pmaO">140</span><span></span><div style="display:none">143</div><span style="display: inline">197</span><span class="6">.</span><span class="DjDm">161</span><span class="FmSt">215</span><div style="display:none">215</div><span style="display: inline">234</span>.<span class="134">164</span></span></td><td>80</td><td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span></td><td> <div class="progress-indicator" style="width: 114px" value="5831" levels="speed" rel="5831"><div class="indicator" style="width: 42%; background-color: rgb(255, 204, 0)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="268" value="268" levels="speed"><div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTP</td><td nowrap="">None</td></tr><tr class="altshade" style="display: table-row;" rel="19150790"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.xcju{display:none}.v6lY{display:inline}</style><span style="display:none">74</span><span class="xcju">74</span><div style="display:none">74</div><span></span>183<span></span><span class="v6lY">.</span><span class="26">250</span><span class="127">.</span><span style="display:none">2</span><div style="display:none">23</div><span style="display:none">40</span><span></span><span class="xcju">42</span><div style="display:none">42</div><span style="display: inline">91</span><span style="display:none">107</span><div style="display:none">107</div><span class="xcju">165</span><span></span><span style="display:none">181</span><div style="display:none">181</div><span style="display: inline">.</span>33<span></span></span></td><td>80</td><td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span></td><td> <div class="progress-indicator" style="width: 114px" value="780" levels="speed" rel="780"><div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="262" value="262" levels="speed"><div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTPS</td><td nowrap="">High +KA</td></tr><tr class="" style="display: table-row;" rel="19150789"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.vKsh{display:none}.j7wC{display:inline}.wgNF{display:none}.tl8a{display:inline}</style>112<span class="j7wC">.</span><span style="display:none">5</span><span class="wgNF">5</span><div style="display:none">5</div><span class="tl8a">25</span><span style="display:none">120</span><div style="display:none">120</div><span style="display:none">157</span><div style="display:none">157</div><span></span><span style="display:none">240</span><span class="tl8a">.</span><span class="tl8a">41</span><span class="wgNF">55</span><span></span><span></span><span class="vKsh">131</span><div style="display:none">131</div><span style="display:none">137</span><div style="display:none">137</div><span class="wgNF">175</span><span class="vKsh">192</span><span></span><span class="tl8a">.</span><span style="display:none">53</span><span class="wgNF">53</span><span></span><div style="display:none">122</div><span style="display: inline">136</span><span class="vKsh">138</span><div style="display:none">138</div><span class="vKsh">144</span><div style="display:none">144</div><span style="display:none">174</span><span class="vKsh">174</span><span class="wgNF">220</span><span></span><span class="wgNF">237</span><div style="display:none">237</div><span class="vKsh">246</span><div style="display:none">246</div></span></td><td>80</td><td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span></td><td> <div class="progress-indicator" style="width: 114px" value="762" levels="speed" rel="762"><div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="247" value="247" levels="speed"><div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTP</td><td nowrap="">High</td></tr><tr class="altshade" style="display: table-row;" rel="19150797"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.yBea{display:none}.A8y5{display:inline}.jSKp{display:none}.xuZX{display:inline}</style><span style="display:none">135</span><div style="display:none">135</div><span style="display: inline">212</span><span class="A8y5">.</span><span style="display: inline">211</span><span class="184">.</span><span class="71">197</span><span style="display: inline">.</span><span class="yBea">16</span><span></span><span></span><span style="display:none">45</span><span class="jSKp">45</span><span></span><span class="jSKp">54</span><div style="display:none">68</div><div style="display:none">72</div><span class="137">94</span><span style="display:none">207</span><span class="yBea">207</span><div style="display:none">207</div><span style="display:none">216</span><span class="yBea">216</span><div style="display:none">216</div><span style="display:none">223</span></span></td><td>80</td><td style="text-align:left" rel="de"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-de" alt="flag ">Germany</span></td><td> <div class="progress-indicator" style="width: 114px" value="5076" levels="speed" rel="5076"><div class="indicator" style="width: 49%; background-color: rgb(255, 204, 0)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="13" value="13" levels="speed"><div class="indicator" style="width: 100%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTPS</td><td nowrap="">High +KA</td></tr><tr class="" style="display: table-row;" rel="19150793"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.w4uT{display:none}.ktVY{display:inline}.dNma{display:none}.b_Dn{display:inline}.UbAB{display:none}.zEOd{display:inline}</style><span class="UbAB">17</span><span style="display:none">44</span><div style="display:none">44</div><span class="dNma">71</span><div style="display:none">71</div><span style="display:none">99</span><span class="w4uT">99</span><span></span><span class="UbAB">113</span><div style="display:none">113</div><span style="display:none">126</span><span class="dNma">126</span><span></span><span style="display:none">158</span><span class="dNma">158</span><span></span><span style="display:none">162</span><div style="display:none">162</div><span style="display: inline">200</span><span class="ktVY">.</span><span class="UbAB">127</span><div style="display:none">127</div><span class="ktVY">142</span><span class="127">.</span><div style="display:none">32</div><span class="w4uT">38</span><div style="display:none">38</div><span style="display:none">63</span><span style="display:none">121</span><div style="display:none">121</div><span style="display:none">150</span><span class="w4uT">150</span><div style="display:none">150</div><span class="97">196</span>.<span class="35">229</span></span></td><td>80</td><td style="text-align:left" rel="br"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-br" alt="flag ">Brazil</span></td><td> <div class="progress-indicator" style="width: 114px" value="5661" levels="speed" rel="5661"><div class="indicator" style="width: 43%; background-color: rgb(255, 204, 0)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="215" value="215" levels="speed"><div class="indicator" style="width: 96%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTPS</td><td nowrap="">High +KA</td></tr><tr class="altshade" style="display: table-row;" rel="19150800"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.rUtp{display:none}.cosF{display:inline}</style><span style="display: inline">120</span><span class="rUtp">143</span><div style="display:none">200</div><span class="rUtp">234</span><span></span><span style="display:none">240</span><span class="rUtp">240</span><span></span><span class="cosF">.</span><span style="display:none">28</span><div style="display:none">28</div><span class="rUtp">48</span><span></span><span style="display:none">54</span><div style="display:none">54</div><span style="display:none">65</span><span class="rUtp">65</span><span class="rUtp">115</span><div style="display:none">115</div><span style="display:none">172</span><span class="rUtp">172</span><div style="display:none">172</div><span class="rUtp">176</span><div style="display:none">176</div><span class="cosF">198</span><span class="rUtp">244</span><div style="display:none">244</div>.<span class="cosF">237</span><span class="cosF">.</span><span class="218">5</span></span></td><td>80</td><td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span></td><td> <div class="progress-indicator" style="width: 114px" value="821" levels="speed" rel="821"><div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="274" value="274" levels="speed"><div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTPS</td><td nowrap="">High +KA</td></tr><tr class="" style="display: table-row;" rel="19150795"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.GwmC{display:none}.PGJb{display:inline}</style><span style="display:none">48</span><span class="GwmC">48</span><div style="display:none">48</div><span style="display:none">51</span><span style="display:none">59</span><span class="GwmC">59</span><div style="display:none">59</div><div style="display:none">60</div><span style="display:none">62</span><span class="GwmC">62</span><span class="GwmC">99</span><span style="display:none">108</span><span class="GwmC">108</span><div style="display:none">108</div><span class="GwmC">112</span><div style="display:none">112</div>117<span class="GwmC">158</span><span style="display:none">159</span><span class="GwmC">159</span><div style="display:none">159</div>.<span class="PGJb">136</span><span style="display:none">151</span><div style="display:none">151</div><span style="display:none">187</span><span class="199">.</span><span class="PGJb">234</span><span style="display: inline">.</span><span class="PGJb">3</span></span></td><td>80</td><td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span></td><td> <div class="progress-indicator" style="width: 114px" value="1132" levels="speed" rel="1132"><div class="indicator" style="width: 89%; background-color: rgb(0, 173, 173)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="261" value="261" levels="speed"><div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTP</td><td nowrap="">High +KA</td></tr><tr class="altshade" style="display: table-row;" rel="19150788"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.psCT{display:none}.Vzxa{display:inline}.gfQo{display:none}.A_n3{display:inline}</style><span style="display:none">27</span><span class="psCT">27</span><span></span><span class="Vzxa">223</span><span class="43">.</span><span></span><span class="39">64</span><span style="display:none">131</span><span class="psCT">131</span><span></span><div style="display:none">140</div><span style="display:none">195</span>.36<span class="gfQo">109</span><div style="display:none">109</div><span style="display:none">117</span><span class="psCT">117</span><span style="display:none">223</span><span class="gfQo">223</span><span class="gfQo">251</span>.<span class="A_n3">20</span><span style="display:none">111</span><div style="display:none">111</div><span></span></span></td><td>8123</td><td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span></td><td> <div class="progress-indicator" style="width: 114px" value="5842" levels="speed" rel="5842"><div class="indicator" style="width: 42%; background-color: rgb(255, 204, 0)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="247" value="247" levels="speed"><div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTPS</td><td nowrap="">High +KA</td></tr><tr class="" style="display: table-row;" rel="19150785"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.yHU4{display:none}.VjK-{display:inline}</style><span style="display:none">68</span><span></span><span style="display: inline">118</span><span style="display: inline">.</span><span style="display: inline">143</span><span class="42">.</span><span class="VjK-">207</span><span class="VjK-">.</span><span class="6">1</span></span></td><td>8080</td><td style="text-align:left" rel="hk"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-hk" alt="flag ">Hong Kong</span></td><td> <div class="progress-indicator" style="width: 114px" value="5807" levels="speed" rel="5807"><div class="indicator" style="width: 42%; background-color: rgb(255, 204, 0)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="270" value="270" levels="speed"><div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTPS</td><td nowrap="">High +KA</td></tr><tr class="altshade" style="display: table-row;" rel="19150806"><td class="leftborder timestamp" rel="1441069082"><span class="updatets newproxy">43secs</span></td><td><span><style>.m6yD{display:none}.H54x{display:inline}.FCQ5{display:none}.mm7Y{display:inline}.zrKw{display:none}.UAmP{display:inline}.VCrx{display:none}.YKQE{display:inline}</style><span class="UAmP">211</span><span class="H54x">.</span><span style="display:none">7</span><span class="VCrx">7</span><span class="zrKw">17</span><div style="display:none">17</div><span></span><span style="display:none">52</span><span style="display:none">56</span><div style="display:none">56</div><div style="display:none">57</div><div style="display:none">93</div><div style="display:none">109</div><span class="m6yD">113</span><span></span><span style="display:none">114</span><div style="display:none">114</div><span style="display:none">119</span><span class="VCrx">119</span><span class="VCrx">133</span><div style="display:none">133</div><span style="display: inline">137</span><span style="display:none">162</span><span class="FCQ5">193</span><span></span><span style="display:none">216</span><span></span><span style="display: inline">.</span><span style="display: inline">39</span><span style="display:none">92</span><div style="display:none">92</div><div style="display:none">164</div><span style="display:none">195</span><span class="VCrx">195</span><span></span>.<span class="UAmP">20</span></span></td><td>8080</td><td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;"><img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span></td><td> <div class="progress-indicator" style="width: 114px" value="1158" levels="speed" rel="1158"><div class="indicator" style="width: 88%; background-color: rgb(0, 173, 173)"></div></div></td><td><div class="progress-indicator " style="width: 114px" title="" rel="277" value="277" levels="speed"><div class="indicator" style="width: 94%; background-color: rgb(0, 173, 173)"></div></div></td><td>HTTPS</td><td nowrap="">High +KA</td></tr>

                          <tr class="" rel="19150806">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.oWNV{display:none}
.LjLK{display:inline}
.QdfC{display:none}
.Jygz{display:inline}
.oSa_{display:none}
.EdHV{display:inline}
</style>211<span class="138">.</span>137<span class="oSa_">166</span><div style="display:none">166</div>.<span style="display: inline">39</span><div style="display:none">134</div><span style="display:none">172</span><span class="oSa_">172</span><div style="display:none">172</div><span class="oWNV">211</span><div style="display:none">211</div><span style="display: inline">.</span>20</span></td>
         <td>
8080</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="1158" levels="speed" rel="1158">
        <div class="indicator" style="width: 88%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="277" value="277" levels="speed">
                            <div class="indicator" style="width: 94%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150785">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.fDHK{display:none}
.EVRT{display:inline}
.yGyW{display:none}
.s6om{display:inline}
.kLxU{display:none}
.KVUa{display:inline}
.WH3v{display:none}
.Z_eg{display:inline}
</style><span style="display:none">1</span><div style="display:none">1</div><span class="kLxU">9</span><div style="display:none">9</div><span style="display:none">70</span><span class="WH3v">70</span><div style="display:none">70</div><span style="display:none">74</span><span style="display:none">115</span><span></span><span class="Z_eg">118</span><span style="display:none">143</span><span class="yGyW">143</span><div style="display:none">143</div><div style="display:none">168</div><span class="s6om">.</span><div style="display:none">3</div><div style="display:none">91</div><span style="display:none">95</span><span style="display: inline">143</span><div style="display:none">241</div><span class="Z_eg">.</span><span style="display:none">58</span><span class="kLxU">58</span><div style="display:none">58</div><span class="yGyW">140</span><div style="display:none">140</div><span style="display:none">176</span><span class="kLxU">176</span><div style="display:none">176</div>207<span class="184">.</span><span class="EVRT">1</span><span></span></span></td>
         <td>
8080</td>
             <td style="text-align:left" rel="hk"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-hk" alt="flag ">Hong Kong</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5807" levels="speed" rel="5807">
        <div class="indicator" style="width: 42%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="270" value="270" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150788">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.sCuk{display:none}
.SidN{display:inline}
.foQB{display:none}
.ngqj{display:inline}
.GCZ0{display:none}
.vVe3{display:inline}
.tOxa{display:none}
.feYW{display:inline}
</style><span style="display:none">43</span><div style="display:none">43</div><span style="display:none">108</span><div style="display:none">108</div><span style="display:none">188</span><span class="sCuk">188</span><span style="display:none">194</span><div style="display:none">194</div>223<span></span><span class="vVe3">.</span><span style="display: inline">64</span><span class="121">.</span><span class="39">36</span><span style="display:none">40</span><span class="tOxa">40</span><div style="display:none">40</div><span class="182">.</span><span class="230">20</span><span style="display:none">47</span><span></span><span style="display:none">76</span><div style="display:none">76</div><span class="sCuk">80</span><div style="display:none">80</div><div style="display:none">127</div></span></td>
         <td>
8123</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5842" levels="speed" rel="5842">
        <div class="indicator" style="width: 42%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="247" value="247" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150795">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.EjSQ{display:none}
.GYVc{display:inline}
.kxn3{display:none}
.O3Hw{display:inline}
.AxdE{display:none}
.SqpZ{display:inline}
</style><span style="display:none">87</span><div style="display:none">87</div><span style="display: inline">117</span><span style="display:none">152</span><span class="EjSQ">152</span><div style="display:none">152</div><span style="display: inline">.</span><span style="display:none">67</span><span class="EjSQ">67</span><div style="display:none">67</div><span style="display: inline">136</span><span style="display:none">162</span><span class="kxn3">162</span><div style="display:none">162</div><span class="34">.</span><span style="display: inline">234</span>.<span style="display: inline">3</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="1132" levels="speed" rel="1132">
        <div class="indicator" style="width: 89%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="261" value="261" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150800">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.JJny{display:none}
.OEDT{display:inline}
.hYmI{display:none}
.AcOF{display:inline}
.X6gY{display:none}
.ckiv{display:inline}
.Dzld{display:none}
.Lo0u{display:inline}
</style><span class="Lo0u">120</span><span class="44">.</span>198<span style="display: inline">.</span><div style="display:none">55</div><span class="hYmI">57</span><span class="Dzld">72</span><div style="display:none">72</div><span style="display:none">78</span><span style="display:none">81</span><span class="hYmI">81</span><span style="display:none">93</span><span class="hYmI">106</span><span></span><span class="Dzld">121</span><span></span><span class="X6gY">151</span><div style="display:none">151</div><span style="display:none">156</span><div style="display:none">156</div><span></span><span class="X6gY">164</span><div style="display:none">164</div><span class="hYmI">171</span><span style="display:none">190</span><div style="display:none">190</div><div style="display:none">220</div><span class="Lo0u">237</span><span class="115">.</span><span style="display: inline">5</span><span class="JJny">76</span><span></span><span style="display:none">133</span><span class="Dzld">133</span><div style="display:none">133</div><span style="display:none">191</span><div style="display:none">191</div><span class="JJny">211</span><div style="display:none">211</div><span style="display:none">220</span><div style="display:none">220</div></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="821" levels="speed" rel="821">
        <div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="274" value="274" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150793">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.Do2i{display:none}
.vxIa{display:inline}
.G1Ic{display:none}
.dgL9{display:inline}
</style><span></span><span style="display:none">119</span><span class="G1Ic">119</span><div style="display:none">119</div><span style="display:none">171</span><div style="display:none">171</div><span class="dgL9">200</span><span style="display:none">234</span><span style="display: inline">.</span><span class="Do2i">50</span><span></span><span style="display:none">70</span><span class="Do2i">70</span><div style="display:none">80</div><span style="display:none">92</span><span class="G1Ic">92</span><div style="display:none">92</div><span style="display:none">109</span><div style="display:none">109</div><span style="display:none">119</span><div style="display:none">119</div><span class="203">142</span><span class="G1Ic">147</span><span style="display:none">191</span><span class="Do2i">191</span><div style="display:none">216</div><div style="display:none">234</div><span class="Do2i">249</span><div style="display:none">249</div><span class="138">.</span>196<span class="128">.</span><span class="83">229</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="br"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-br" alt="flag ">Brazil</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5661" levels="speed" rel="5661">
        <div class="indicator" style="width: 43%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="215" value="215" levels="speed">
                            <div class="indicator" style="width: 96%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150797">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.sbKQ{display:none}
.kflF{display:inline}
.jT_a{display:none}
.Cpov{display:inline}
.a7Tx{display:none}
.dUAg{display:inline}
.G-Tj{display:none}
.EALe{display:inline}
</style><span class="158">212</span>.<span style="display:none">186</span><span class="jT_a">189</span><div style="display:none">189</div><div style="display:none">207</div><span style="display: inline">211</span><span class="242">.</span><span style="display:none">20</span><span></span><span style="display:none">117</span><span style="display:none">158</span><span class="jT_a">158</span><div style="display:none">158</div><span class="jT_a">160</span>197<span class="jT_a">229</span><div style="display:none">229</div><span class="dUAg">.</span><span class="kflF">94</span><span></span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="de"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-de" alt="flag ">Germany</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5076" levels="speed" rel="5076">
        <div class="indicator" style="width: 49%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="13" value="13" levels="speed">
                            <div class="indicator" style="width: 100%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150789">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.AQoE{display:none}
.h_Y1{display:inline}
.pF-8{display:none}
.Nm7l{display:inline}
.vrY9{display:none}
.sayj{display:inline}
.CS-k{display:none}
.Di9W{display:inline}
</style><span class="217">112</span><span style="display: inline">.</span><span style="display: inline">25</span><span style="display: inline">.</span><span style="display: inline">41</span><span style="display:none">71</span><div style="display:none">71</div><span style="display:none">79</span><span class="AQoE">79</span><div style="display:none">138</div><span style="display:none">156</span><span></span><div style="display:none">197</div><span style="display: inline">.</span><span style="display:none">32</span><span class="AQoE">32</span><div style="display:none">32</div><div style="display:none">115</div>136<span class="AQoE">149</span><div style="display:none">149</div><span class="vrY9">162</span><div style="display:none">162</div><span></span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="762" levels="speed" rel="762">
        <div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="247" value="247" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150790">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.qN5t{display:none}
.Gi_5{display:inline}
.fyaq{display:none}
.h_3B{display:inline}
.RfIO{display:none}
.mTc-{display:inline}
.UWOq{display:none}
.O6zN{display:inline}
</style><div style="display:none">17</div><div style="display:none">19</div><span style="display:none">31</span><span class="UWOq">63</span><div style="display:none">63</div><span class="fyaq">124</span><span class="UWOq">138</span><div style="display:none">138</div><div style="display:none">180</div>183<span style="display:none">184</span><span class="qN5t">184</span>.<span style="display:none">90</span><div style="display:none">90</div><span style="display:none">135</span><span></span><span style="display:none">140</span><span class="RfIO">140</span><div style="display:none">140</div><span class="UWOq">149</span><div style="display:none">149</div><span></span><span style="display:none">192</span><span class="h_3B">250</span>.<span class="15">91</span><span class="h_3B">.</span><span class="qN5t">22</span><div style="display:none">22</div><span class="Gi_5">33</span><span class="qN5t">42</span><span></span><span class="fyaq">56</span><span></span><span style="display:none">75</span><div style="display:none">75</div><span class="fyaq">222</span><span></span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="780" levels="speed" rel="780">
        <div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="262" value="262" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150803">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.rSYi{display:none}
.Heci{display:inline}
.u5vq{display:none}
.hD5Q{display:inline}
</style><span style="display:none">4</span><span class="rSYi">4</span><span class="u5vq">11</span><span style="display:none">27</span><span></span><span class="rSYi">30</span><span class="rSYi">32</span><span></span><span style="display:none">41</span><div style="display:none">41</div><span style="display:none">43</span><span class="u5vq">43</span><div style="display:none">43</div><span class="u5vq">97</span><span></span><span style="display:none">108</span><div style="display:none">108</div><span class="rSYi">117</span><div style="display:none">117</div><span style="display: inline">120</span><span class="rSYi">140</span><div style="display:none">140</div><span style="display:none">144</span><span style="display:none">147</span><div style="display:none">147</div><span style="display:none">171</span><span class="rSYi">171</span><div style="display:none">171</div><div style="display:none">179</div><span class="u5vq">196</span><div style="display:none">196</div><span class="u5vq">228</span><div style="display:none">228</div><span class="u5vq">246</span><span></span><span class="43">.</span><span style="display:none">142</span><span></span><span class="rSYi">164</span><div style="display:none">164</div><span style="display: inline">197</span>.<span class="hD5Q">234</span><span class="47">.</span><span style="display:none">125</span><span class="u5vq">125</span><div style="display:none">125</div><span style="display:none">147</span><span class="rSYi">147</span><span class="170">164</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5831" levels="speed" rel="5831">
        <div class="indicator" style="width: 42%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="268" value="268" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">Low</td>

         </tr>
  <tr class="" rel="19150792">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.QUb-{display:none}
.P3q9{display:inline}
.Hgu1{display:none}
.zJR3{display:inline}
.rcr_{display:none}
.miWx{display:inline}
</style><span class="QUb-">3</span><span></span><span class="QUb-">23</span><span></span><span class="Hgu1">30</span><div style="display:none">30</div><span style="display:none">107</span><span class="Hgu1">107</span><span></span><span class="Hgu1">114</span><div style="display:none">114</div>115<span class="rcr_">118</span><span></span><span style="display:none">149</span><span></span><div style="display:none">170</div><div style="display:none">182</div><span style="display:none">194</span><div style="display:none">194</div><div style="display:none">252</div><span style="display:none">254</span><span></span>.159.<span class="zJR3">5</span><span style="display:none">40</span><span class="QUb-">40</span><div style="display:none">50</div><span class="QUb-">76</span><div style="display:none">76</div><span class="Hgu1">92</span><div style="display:none">92</div><span style="display:none">151</span><span></span><div style="display:none">160</div><div style="display:none">197</div><span style="display:none">220</span><span></span><span class="206">.</span><span style="display:none">77</span><span class="QUb-">77</span><div style="display:none">77</div><span style="display:none">213</span><span style="display:none">237</span><div style="display:none">237</div>247<span></span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5950" levels="speed" rel="5950">
        <div class="indicator" style="width: 41%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="307" value="307" levels="speed">
                            <div class="indicator" style="width: 94%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150807">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.UB_3{display:none}
.GHOo{display:inline}
.A_Xx{display:none}
.GV1c{display:inline}
.K3zr{display:none}
.KImT{display:inline}
</style><span style="display: inline">111</span><span class="GV1c">.</span><span style="display:none">80</span><span class="K3zr">80</span><span></span><span class="UB_3">133</span><div style="display:none">133</div><span style="display: inline">161</span><span></span><span class="211">.</span><span style="display:none">51</span><span class="UB_3">51</span><span></span><span class="196">126</span><span style="display:none">203</span><span class="A_Xx">203</span><div style="display:none">203</div>.<span class="GHOo">98</span><div style="display:none">161</div><span class="K3zr">224</span><span></span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="1051" levels="speed" rel="1051">
        <div class="indicator" style="width: 89%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="344" value="344" levels="speed">
                            <div class="indicator" style="width: 93%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150799">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.z_wG{display:none}
.TGO3{display:inline}
.CDd2{display:none}
.h-LA{display:inline}
.xE_j{display:none}
.quRp{display:inline}
.DHp4{display:none}
.fzKl{display:inline}
</style><span class="quRp">120</span>.<span style="display: inline">26</span><span class="DHp4">141</span><span></span><span class="172">.</span><span style="display:none">85</span><span class="z_wG">85</span>192<span class="fzKl">.</span><span></span><span class="z_wG">77</span><span></span><span class="DHp4">87</span><div style="display:none">87</div><span style="display:none">107</span><span></span>127<span style="display:none">136</span><span class="xE_j">136</span><div style="display:none">136</div><span style="display:none">173</span><span></span><span style="display:none">183</span><span class="CDd2">183</span><div style="display:none">183</div><span style="display:none">201</span><span class="DHp4">201</span><span style="display:none">229</span><span class="xE_j">229</span><div style="display:none">229</div><span style="display:none">238</span><div style="display:none">238</div><span class="CDd2">239</span></span></td>
         <td>
3128</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="6662" levels="speed" rel="6662">
        <div class="indicator" style="width: 33%; background-color: rgb(237, 28, 36)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="625" value="625" levels="speed">
                            <div class="indicator" style="width: 88%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150805">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.fQJk{display:none}
.SCev{display:inline}
</style><span style="display:none">25</span><span class="fQJk">25</span><span class="fQJk">158</span><div style="display:none">158</div><span class="fQJk">167</span><span></span><span style="display: inline">183</span><span class="fQJk">241</span><div style="display:none">241</div><span class="SCev">.</span><span class="SCev">221</span><span class="15">.</span><span class="SCev">185</span><span class="77">.</span><span class="SCev">85</span></span></td>
         <td>
8123</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="4169" levels="speed" rel="4169">
        <div class="indicator" style="width: 58%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="283" value="283" levels="speed">
                            <div class="indicator" style="width: 94%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150791">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.ZZtJ{display:none}
.vmBr{display:inline}
.avHQ{display:none}
.q-Nh{display:inline}
.j8yI{display:none}
.VqhU{display:inline}
</style><span style="display: inline">222</span><span class="79">.</span><span style="display: inline">223</span><span class="19">.</span><span class="q-Nh">55</span>.<span class="vmBr">35</span><span class="j8yI">200</span><div style="display:none">200</div></span></td>
         <td>
8080</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5560" levels="speed" rel="5560">
        <div class="indicator" style="width: 44%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="176" value="176" levels="speed">
                            <div class="indicator" style="width: 100%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150802">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.Boph{display:none}
.tYjH{display:inline}
</style><span class="Boph">82</span><span></span><span class="150">198</span><span class="119">.</span>108<span class="Boph">111</span><span></span><span class="Boph">114</span><div style="display:none">114</div><span style="display:none">143</span><div style="display:none">143</div>.<span class="Boph">16</span><div style="display:none">16</div><span style="display:none">75</span><div style="display:none">75</div><div style="display:none">138</div><span class="Boph">195</span><span></span><span class="Boph">231</span><span></span>245<span style="display:none">251</span><div style="display:none">251</div><span class="tYjH">.</span><span style="display:none">136</span><span class="Boph">136</span><div style="display:none">136</div><div style="display:none">223</div><span class="tYjH">243</span></span></td>
         <td>
8080</td>
             <td style="text-align:left" rel="us"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-us" alt="flag ">USA</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5435" levels="speed" rel="5435">
        <div class="indicator" style="width: 46%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="138" value="138" levels="speed">
                            <div class="indicator" style="width: 100%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150786">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.VYdL{display:none}
.HmoQ{display:inline}
.ci-9{display:none}
.uKtE{display:inline}
.zJG-{display:none}
.qpEB{display:inline}
.yClZ{display:none}
.B7Nd{display:inline}
</style><span class="30">14</span><span></span><span style="display:none">77</span><span class="zJG-">77</span><div style="display:none">77</div><span class="84">.</span><span style="display:none">95</span><div style="display:none">95</div><span></span>152<span style="display: inline">.</span><span style="display:none">2</span><span class="zJG-">2</span><span class="yClZ">42</span><div style="display:none">42</div><span class="qpEB">49</span><span style="display:none">60</span><span class="yClZ">60</span><div style="display:none">60</div><span style="display:none">94</span><span class="zJG-">94</span><div style="display:none">94</div><span class="yClZ">118</span><div style="display:none">118</div><span style="display:none">180</span><div style="display:none">180</div><span style="display:none">182</span><span class="yClZ">182</span><div style="display:none">182</div><span style="display:none">191</span><span class="VYdL">191</span><span></span><span style="display:none">220</span><span></span>.<span class="VYdL">57</span><div style="display:none">60</div><span style="display:none">103</span><span class="yClZ">103</span><span style="display:none">138</span><div style="display:none">138</div><span style="display:none">192</span><span></span><span class="HmoQ">193</span></span></td>
         <td>
8088</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="765" levels="speed" rel="765">
        <div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="213" value="213" levels="speed">
                            <div class="indicator" style="width: 96%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150796">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.IBWN{display:none}
.AsEK{display:inline}
</style><span style="display: inline">117</span><span class="6">.</span><span class="IBWN">34</span><span></span><span class="IBWN">96</span><div style="display:none">96</div><span style="display: inline">135</span><span style="display:none">144</span><div style="display:none">144</div><div style="display:none">198</div><span class="IBWN">208</span><div style="display:none">208</div><span style="display:none">237</span><span class="IBWN">237</span><div style="display:none">237</div><span style="display:none">245</span><div style="display:none">245</div>.<span class="IBWN">42</span><div style="display:none">42</div><span class="IBWN">101</span><span></span><span class="IBWN">121</span><div style="display:none">121</div><span style="display:none">129</span><span class="IBWN">129</span><div style="display:none">129</div><span></span><div style="display:none">181</div><span class="IBWN">201</span><span class="IBWN">207</span><span style="display:none">224</span><span class="AsEK">250</span><span style="display: inline">.</span><span class="IBWN">30</span>138<div style="display:none">155</div><span style="display:none">214</span><span class="IBWN">214</span><div style="display:none">214</div><span style="display:none">218</span><div style="display:none">218</div></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5350" levels="speed" rel="5350">
        <div class="indicator" style="width: 47%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="296" value="296" levels="speed">
                            <div class="indicator" style="width: 94%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150798">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.VZxq{display:none}
.DPms{display:inline}
</style><span style="display: inline">37</span><span class="DPms">.</span><div style="display:none">12</div><span class="62">59</span><div style="display:none">104</div><div style="display:none">123</div><span class="VZxq">125</span><div style="display:none">125</div><span style="display:none">129</span><span class="VZxq">129</span><div style="display:none">129</div><span class="VZxq">233</span><div style="display:none">233</div><span style="display: inline">.</span><span style="display:none">88</span><span class="VZxq">88</span><div style="display:none">88</div><span class="135">211</span><span class="DPms">.</span><span class="DPms">192</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="fr"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-fr" alt="flag ">France</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="7440" levels="speed" rel="7440">
        <div class="indicator" style="width: 26%; background-color: rgb(237, 28, 36)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="3015" value="3015" levels="speed">
                            <div class="indicator" style="width: 40%; background-color: rgb(255, 204, 0)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150804">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.VmZJ{display:none}
.UoV0{display:inline}
.aCeD{display:none}
.a9iF{display:inline}
</style><span></span>36<span class="UoV0">.</span><div style="display:none">116</div><span style="display:none">170</span><span class="VmZJ">170</span><div style="display:none">170</div>250.<span class="22">75</span><span></span><span style="display: inline">.</span><span style="display:none">2</span><span></span><span class="VmZJ">40</span><span></span><span style="display:none">60</span><span class="VmZJ">60</span><div style="display:none">60</div><span style="display:none">63</span><span class="VmZJ">63</span><div style="display:none">63</div><span style="display:none">68</span><span class="VmZJ">68</span><div style="display:none">68</div><span class="VmZJ">76</span><div style="display:none">76</div><span style="display:none">87</span><span class="aCeD">87</span><div style="display:none">87</div><span style="display: inline">99</span><span style="display:none">115</span><span class="VmZJ">115</span><div style="display:none">115</div><div style="display:none">120</div><span style="display:none">125</span><span class="VmZJ">125</span><span></span><span class="VmZJ">147</span><div style="display:none">147</div><span style="display:none">156</span><span class="VmZJ">156</span><div style="display:none">156</div><span class="VmZJ">189</span><div style="display:none">189</div><span style="display:none">199</span><span class="aCeD">199</span><div style="display:none">199</div><span></span><span style="display:none">228</span><div style="display:none">228</div><span class="aCeD">241</span><div style="display:none">241</div></span></td>
         <td>
8080</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="919" levels="speed" rel="919">
        <div class="indicator" style="width: 91%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="400" value="400" levels="speed">
                            <div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150808">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.XQ4K{display:none}
.TjPT{display:inline}
.CHUb{display:none}
.RE5O{display:inline}
</style><span style="display:none">2</span><span class="XQ4K">2</span><div style="display:none">2</div><span style="display:none">96</span><span></span><span class="RE5O">111</span><span style="display:none">150</span><span class="XQ4K">150</span><span></span><span class="CHUb">203</span><div style="display:none">203</div><span class="206">.</span><span style="display:none">9</span><div style="display:none">9</div><span style="display:none">52</span><span style="display:none">61</span><span class="26">161</span><span class="XQ4K">184</span><div style="display:none">184</div><span style="display:none">244</span><span class="CHUb">244</span><span></span><span class="119">.</span><div style="display:none">98</div><span style="display:none">108</span><span class="XQ4K">108</span><span></span><div style="display:none">125</div><span style="display: inline">126</span><span style="display:none">250</span><div style="display:none">250</div><span class="157">.</span><span class="CHUb">45</span><div style="display:none">45</div><span class="CHUb">77</span><div style="display:none">77</div>100<span style="display:none">131</span><span style="display:none">200</span><span class="CHUb">200</span><div style="display:none">200</div><span style="display:none">253</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="1056" levels="speed" rel="1056">
        <div class="indicator" style="width: 89%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="352" value="352" levels="speed">
                            <div class="indicator" style="width: 93%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150787">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.d_rk{display:none}
.lDX7{display:inline}
</style><span class="207">124</span><span style="display: inline">.</span><span class="184">240</span>.<span style="display:none">65</span><span></span><span style="display:none">88</span><span class="d_rk">88</span>187.<span style="display: inline">79</span><span></span></span></td>
         <td>
81</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="1074" levels="speed" rel="1074">
        <div class="indicator" style="width: 89%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="343" value="343" levels="speed">
                            <div class="indicator" style="width: 93%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150794">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.gxP3{display:none}
.yCEY{display:inline}
.vJo5{display:none}
.EDr7{display:inline}
.EaHj{display:none}
.saCw{display:inline}
</style><span style="display:none">162</span><span class="vJo5">162</span><div style="display:none">162</div><span class="47">180</span><span class="gxP3">222</span><span style="display:none">226</span><span class="vJo5">226</span><div style="display:none">226</div><span class="EaHj">233</span><div style="display:none">233</div><span class="214">.</span><span class="yCEY">166</span><span style="display:none">242</span><span></span><span class="EDr7">.</span><span style="display:none">28</span><div style="display:none">28</div><span style="display:none">93</span><div style="display:none">93</div><span style="display:none">101</span><span class="EaHj">101</span><div style="display:none">101</div>112<span class="gxP3">141</span><div style="display:none">141</div><span class="saCw">.</span><span></span><span style="display: inline">47</span><span style="display:none">196</span><span class="gxP3">196</span><div style="display:none">196</div></span></td>
         <td>
8888</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="8749" levels="speed" rel="8749">
        <div class="indicator" style="width: 13%; background-color: rgb(237, 28, 36)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="236" value="236" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150801">
         <td class="leftborder timestamp" rel="1441069082"><span class="updatets ">43s</span></td>
         <td><span><style>
.dhFc{display:none}
.pZPy{display:inline}
</style><span style="display:none">32</span><span class="dhFc">32</span><span></span><span class="pZPy">54</span><span style="display:none">56</span><span class="dhFc">56</span><span class="dhFc">72</span><div style="display:none">72</div><span class="dhFc">96</span><div style="display:none">96</div><span></span><span class="dhFc">131</span><div style="display:none">131</div><span style="display:none">133</span><div style="display:none">133</div><span></span><span></span><span style="display:none">136</span><span class="dhFc">136</span><div style="display:none">136</div><span style="display:none">142</span><span class="dhFc">142</span><div style="display:none">142</div><span style="display:none">149</span><span class="dhFc">149</span><div style="display:none">149</div><span></span><span class="dhFc">243</span><span></span><span class="149">.</span><span style="display:none">43</span><span class="dhFc">43</span><div style="display:none">43</div><span class="pZPy">169</span><span class="pZPy">.</span><span class="dhFc">138</span><div style="display:none">138</div><span style="display: inline">172</span><span class="162">.</span><span style="display:none">10</span><span class="dhFc">10</span><div style="display:none">10</div><div style="display:none">45</div><span style="display:none">65</span><div style="display:none">65</div><span style="display:none">77</span><span class="dhFc">77</span><div style="display:none">77</div><span style="display:none">115</span><span></span><span style="display:none">150</span><span></span><span class="dhFc">203</span><div style="display:none">203</div>241</span></td>
         <td>
8080</td>
             <td style="text-align:left" rel="us"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-us" alt="flag ">USA</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5886" levels="speed" rel="5886">
        <div class="indicator" style="width: 41%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="286" value="286" levels="speed">
                            <div class="indicator" style="width: 94%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">Low</td>

         </tr>
  <tr class="" rel="19150779">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.sfQu{display:none}
.QiUk{display:inline}
.vrmx{display:none}
.GgrX{display:inline}
</style><span class="181">117</span>.34.<span style="display:none">18</span><span class="sfQu">18</span><span style="display:none">97</span><div style="display:none">97</div><span class="GgrX">100</span><span class="sfQu">225</span><span class="vrmx">230</span><div style="display:none">230</div><span style="display:none">247</span><span class="sfQu">247</span><div style="display:none">247</div><div style="display:none">254</div>.<span></span><div style="display:none">14</div><span class="vrmx">21</span><span class="207">78</span><span style="display:none">155</span><span class="vrmx">155</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="645" levels="speed" rel="645">
        <div class="indicator" style="width: 94%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="212" value="212" levels="speed">
                            <div class="indicator" style="width: 96%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150735">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.NR8w{display:none}
.qtoP{display:inline}
</style><div style="display:none">181</div><span style="display: inline">220</span><span class="qtoP">.</span><span class="NR8w">139</span><span></span><span style="display: inline">181</span><span style="display: inline">.</span><span class="4">32</span><span class="NR8w">43</span><div style="display:none">43</div><span style="display: inline">.</span><span style="display: inline">106</span><span style="display:none">225</span><div style="display:none">225</div></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="2302" levels="speed" rel="2302">
        <div class="indicator" style="width: 77%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="191" value="191" levels="speed">
                            <div class="indicator" style="width: 100%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">Low</td>

         </tr>
  <tr class="" rel="19150758">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.Zbxc{display:none}
.EX7t{display:inline}
.K_jp{display:none}
.ITIE{display:inline}
.pngI{display:none}
.vJRX{display:inline}
.TN6F{display:none}
.WxkW{display:inline}
</style><span class="TN6F">26</span><span></span>112<span class="pngI">176</span><div style="display:none">176</div><span class="ITIE">.</span><span class="ITIE">93</span><span style="display:none">182</span><div style="display:none">182</div><span style="display:none">185</span><span style="display:none">196</span><span></span><span style="display:none">222</span><span class="TN6F">222</span><span></span><span style="display: inline">.</span>114.<span style="display:none">10</span><span class="Zbxc">10</span><span></span>50<span class="K_jp">70</span><span style="display:none">85</span><div style="display:none">85</div><span style="display:none">100</span><span></span><span style="display:none">111</span><div style="display:none">111</div><span style="display:none">113</span><span class="Zbxc">113</span><span style="display:none">132</span><div style="display:none">132</div><span class="TN6F">147</span><div style="display:none">147</div><span style="display:none">189</span><span></span><span style="display:none">192</span><div style="display:none">192</div><div style="display:none">202</div><span style="display:none">217</span><span class="pngI">217</span><div style="display:none">217</div><span style="display:none">252</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="906" levels="speed" rel="906">
        <div class="indicator" style="width: 91%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="365" value="365" levels="speed">
                            <div class="indicator" style="width: 93%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150755">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.qCAg{display:none}
.mQ84{display:inline}
.lx_q{display:none}
.t3If{display:inline}
.LOWg{display:none}
.gUz-{display:inline}
.b0ed{display:none}
.iEAC{display:inline}
</style><span style="display:none">24</span><span class="lx_q">24</span><div style="display:none">24</div><span style="display: inline">113</span><span class="b0ed">163</span><div style="display:none">163</div><span class="lx_q">201</span><span></span><span class="LOWg">226</span><div style="display:none">226</div><div style="display:none">253</div><span class="87">.</span>207<span class="145">.</span><span style="display: inline">56</span><span class="lx_q">211</span>.<span class="gUz-">77</span><span style="display:none">143</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="1122" levels="speed" rel="1122">
        <div class="indicator" style="width: 89%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="360" value="360" levels="speed">
                            <div class="indicator" style="width: 93%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150744">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.wQk4{display:none}
.FXim{display:inline}
.Gh5y{display:none}
.jgPz{display:inline}
.tBaE{display:none}
.Um1Z{display:inline}
</style><span style="display:none">158</span><span class="tBaE">158</span><span></span><span style="display:none">187</span><span class="Gh5y">187</span><span style="display: inline">211</span>.<span style="display:none">9</span><span style="display: inline">137</span><span style="display:none">253</span><span class="tBaE">253</span><span></span><span style="display: inline">.</span><span class="wQk4">25</span><span class="31">39</span><span class="Gh5y">46</span><span></span><span style="display:none">68</span><span style="display:none">213</span><span></span><span style="display:none">235</span><span class="Gh5y">235</span><div style="display:none">235</div>.<span style="display: inline">21</span><span class="Gh5y">213</span><div style="display:none">213</div></span></td>
         <td>
8080</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="825" levels="speed" rel="825">
        <div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="274" value="274" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTPS</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150731">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.yipc{display:none}
.BvHr{display:inline}
</style><div style="display:none">45</div><span style="display:none">55</span><div style="display:none">55</div><span class="yipc">71</span><span class="yipc">112</span><span></span><span class="146">117</span><span style="display:none">129</span><div style="display:none">129</div><span style="display:none">141</span><span class="yipc">141</span><div style="display:none">141</div><span style="display:none">177</span><span class="yipc">177</span><div style="display:none">177</div><span class="yipc">214</span><div style="display:none">214</div><span class="yipc">249</span><span style="display:none">250</span><span class="yipc">250</span><div style="display:none">250</div><span style="display:none">252</span><span class="yipc">252</span><span></span><span style="display: inline">.</span><span style="display:none">7</span><span style="display:none">67</span><div style="display:none">67</div><span style="display:none">125</span><span class="yipc">125</span><div style="display:none">125</div><span class="BvHr">136</span><span style="display:none">246</span><span class="yipc">246</span><span></span><span class="59">.</span><span class="BvHr">234</span>.<span style="display:none">8</span><div style="display:none">8</div>12<span style="display:none">70</span><span></span><div style="display:none">119</div><span style="display:none">126</span><span class="yipc">126</span><span></span><div style="display:none">136</div><span style="display:none">232</span><span class="yipc">232</span><div style="display:none">232</div><span style="display:none">253</span><span class="yipc">253</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="795" levels="speed" rel="795">
        <div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="263" value="263" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150766">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.yoYp{display:none}
.g21d{display:inline}
</style><span style="display:none">67</span><div style="display:none">67</div>117<span class="g21d">.</span><span class="65">136</span><span style="display:none">228</span><span style="display:none">242</span><span></span><span class="g21d">.</span><span style="display:none">69</span><span></span>234<span class="53">.</span>8<span style="display:none">60</span><span class="yoYp">60</span><div style="display:none">60</div><span style="display:none">176</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="786" levels="speed" rel="786">
        <div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="261" value="261" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150774">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.kU1s{display:none}
.Trl8{display:inline}
</style><span class="20">116</span><span class="94">.</span><span style="display:none">32</span><span></span><span class="Trl8">55</span><span style="display:none">82</span><div style="display:none">82</div><span style="display:none">138</span><span class="kU1s">138</span><span style="display:none">148</span><span style="display:none">154</span><span class="kU1s">154</span><span></span><span></span><span style="display:none">183</span><span class="kU1s">183</span><div style="display:none">183</div><span style="display:none">242</span><span class="kU1s">242</span><span></span><span style="display: inline">.</span><span style="display:none">61</span><span class="kU1s">61</span><div style="display:none">174</div><span></span><span style="display:none">191</span><span class="135">238</span><span class="107">.</span><span class="Trl8">12</span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="810" levels="speed" rel="810">
        <div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="253" value="253" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150754">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.v3X8{display:none}
.r7XY{display:inline}
.Ut7d{display:none}
.OdE1{display:inline}
.huPm{display:none}
.d_Qf{display:inline}
.xgzq{display:none}
.mxpU{display:inline}
</style><span style="display:none">24</span><span></span><div style="display:none">64</div><span style="display:none">89</span><div style="display:none">89</div><span class="r7XY">117</span><span class="v3X8">129</span><div style="display:none">129</div><span class="v3X8">159</span><div style="display:none">159</div><div style="display:none">200</div><div style="display:none">225</div>.<span style="display: inline">34</span><span class="mxpU">.</span><span style="display:none">11</span><span class="Ut7d">17</span><span style="display:none">52</span><span class="v3X8">52</span><span></span><span class="xgzq">75</span><div style="display:none">75</div><span class="d_Qf">100</span><span style="display:none">121</span><span class="v3X8">121</span><div style="display:none">121</div><span style="display:none">172</span><span class="Ut7d">172</span><span></span><span style="display:none">191</span><div style="display:none">191</div><span class="Ut7d">193</span><div style="display:none">193</div><span class="7">.</span><span class="24">78</span><span class="huPm">87</span><div style="display:none">87</div><span style="display:none">93</span><div style="display:none">93</div><span style="display:none">149</span><span class="huPm">149</span><div style="display:none">149</div><span style="display:none">199</span><span></span></span></td>
         <td>
8080</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="628" levels="speed" rel="628">
        <div class="indicator" style="width: 94%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="211" value="211" levels="speed">
                            <div class="indicator" style="width: 96%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="altshade" rel="19150771">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.cfLo{display:none}
.lqS6{display:inline}
.TD50{display:none}
.nqci{display:inline}
.HFpA{display:none}
.QuJH{display:inline}
.Gtfu{display:none}
.qdgE{display:inline}
</style><span class="HFpA">17</span>117<span class="Gtfu">194</span><div style="display:none">194</div><span style="display:none">246</span><span class="TD50">246</span><div style="display:none">246</div><span style="display: inline">.</span><span style="display:none">106</span><span class="Gtfu">106</span><div style="display:none">106</div><span class="qdgE">136</span><span class="HFpA">156</span><div style="display:none">156</div><span style="display:none">192</span><div style="display:none">192</div>.<span style="display:none">120</span><span class="cfLo">120</span><div style="display:none">120</div><span style="display:none">190</span><div style="display:none">190</div><span class="29">234</span><span style="display: inline">.</span><span style="display:none">7</span>9<span style="display:none">91</span><div style="display:none">91</div><span style="display:none">99</span><span class="HFpA">99</span><div style="display:none">99</div></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="786" levels="speed" rel="786">
        <div class="indicator" style="width: 92%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="262" value="262" levels="speed">
                            <div class="indicator" style="width: 95%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150752">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.kKGN{display:none}
.ibXh{display:inline}
.lZRF{display:none}
.tc3S{display:inline}
.PTl0{display:none}
.u-Se{display:inline}
</style><span style="display:none">57</span><div style="display:none">57</div>194.<span class="lZRF">17</span><span class="lZRF">39</span><span></span><span style="display:none">77</span><span></span><span style="display: inline">83</span><span></span><span style="display:none">121</span><div style="display:none">121</div><span></span><span style="display: inline">.</span><span style="display:none">30</span><span class="lZRF">30</span><div style="display:none">30</div><span style="display:none">36</span><div style="display:none">36</div><span class="lZRF">76</span><div style="display:none">76</div><span style="display:none">92</span><span class="PTl0">92</span><div style="display:none">150</div><span style="display:none">159</span><div style="display:none">159</div><span style="display:none">163</span><span class="lZRF">163</span><span class="lZRF">173</span><span class="kKGN">187</span><span style="display:none">214</span><div style="display:none">214</div><span class="lZRF">224</span><div style="display:none">224</div><span style="display:none">234</span><span></span><div style="display:none">236</div><span style="display: inline">240</span><span></span><span style="display: inline">.</span>11</span></td>
         <td>
8080</td>
             <td style="text-align:left" rel="gb"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-gb" alt="flag ">UK</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5129" levels="speed" rel="5129">
        <div class="indicator" style="width: 49%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="19" value="19" levels="speed">
                            <div class="indicator" style="width: 100%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">Low</td>

         </tr>
  <tr class="altshade" rel="19150734">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.nYS7{display:none}
.Emkx{display:inline}
</style><span class="nYS7">94</span><div style="display:none">94</div>117<span style="display:none">151</span><span class="nYS7">151</span><div style="display:none">151</div><span style="display:none">202</span><span class="nYS7">202</span><div style="display:none">202</div><span style="display:none">249</span><span class="nYS7">249</span><span></span><span class="32">.</span><span style="display:none">17</span><span></span><span style="display:none">26</span><span class="nYS7">26</span><div style="display:none">26</div><span class="nYS7">34</span><span></span><span></span><span class="nYS7">95</span><span style="display:none">107</span><span class="nYS7">107</span><div style="display:none">107</div><span></span><span class="nYS7">130</span><span></span>135<span class="nYS7">161</span><span></span><span class="nYS7">179</span><span class="nYS7">182</span><div style="display:none">182</div><span class="nYS7">208</span><span></span><span style="display:none">227</span><span class="nYS7">227</span><span></span><span style="display:none">239</span><span></span><span style="display:none">242</span><span class="nYS7">242</span><div style="display:none">242</div><span style="display:none">248</span><span class="nYS7">248</span><div style="display:none">248</div><div style="display:none">249</div><span style="display:none">250</span><span class="nYS7">250</span><div style="display:none">250</div><span style="display: inline">.</span><span style="display:none">98</span><div style="display:none">98</div><div style="display:none">162</div><span class="Emkx">250</span>.<span style="display:none">88</span><span class="nYS7">93</span><span></span><span class="nYS7">125</span><div style="display:none">125</div><span class="115">137</span><span class="nYS7">169</span><span></span></span></td>
         <td>
80</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="5332" levels="speed" rel="5332">
        <div class="indicator" style="width: 47%; background-color: rgb(255, 204, 0)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="296" value="296" levels="speed">
                            <div class="indicator" style="width: 94%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
  <tr class="" rel="19150748">
         <td class="leftborder timestamp" rel="1441069022"><span class="updatets ">1m 43s</span></td>
         <td><span><style>
.ueCr{display:none}
.KWgR{display:inline}
</style><span class="ueCr">26</span><span></span><span class="KWgR">113</span><span class="ueCr">168</span><div style="display:none">168</div>.<span class="KWgR">207</span><span class="222">.</span><span style="display: inline">56</span><span style="display: inline">.</span><span class="ueCr">18</span><div style="display:none">18</div><span style="display:none">64</span><div style="display:none">64</div><span style="display: inline">78</span></span></td>
         <td>
8088</td>
             <td style="text-align:left" rel="cn"><span class="country" style="white-space:nowrap;">



<img src="/images/1x1.png" style="width: 16px; height: 11px; margin-right: 5px;" class="flags-cn" alt="flag ">China</span>
</td>

         <td> <div class="progress-indicator" style="width: 114px" value="1104" levels="speed" rel="1104">
        <div class="indicator" style="width: 89%; background-color: rgb(0, 173, 173)"></div>
		</div>
         </td>
             <td>
                 <div class="progress-indicator " style="width: 114px" title="" rel="369" value="369" levels="speed">
                            <div class="indicator" style="width: 93%; background-color: rgb(0, 173, 173)"></div>

		</div>
             </td>

             <td>HTTP</td>
             <td nowrap="">High +KA</td>

         </tr>
                    </tbody>
                </table>
HTML;
$crawler = new Crawler($html);
$crawler1 = $crawler->filterXPath('//*[@id="listable"]/tbody/tr[1]/td[2]/span/*');
$invisibleClass = array();
foreach ($crawler1 as $domElement) {
	if($domElement->tagName == 'style') {
		$invisibleClass = getInVisibleClass($domElement->textContent);
		var_dump($invisibleClass);
	}
	else{
		if( ($domElement->getAttribute('style') !== 'display:none') && (!in_array($domElement->getAttribute('class'), $invisibleClass))){
			var_dump($domElement->getAttribute('class'));
			echo $domElement->textContent;
		}
	}
}
function getInVisibleClass($style){
	$regex = "/\\.(\\w+){display:none}/i";
	preg_match_all($regex, $style, $matches);
	if($matches){
		return $matches[1];
	}
	else{
		return array();
	}
}