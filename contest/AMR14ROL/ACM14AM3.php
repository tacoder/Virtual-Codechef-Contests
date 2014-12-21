<?php require("../../includes/header.php"); ?><h1>Launch Tower</h1><div class="content">
<p><i>"The Mars Orbiter Mission probe lifted-off from the First Launch Pad at Satish Dhawan Space Centre (Sriharikota Range SHAR), Andhra Pradesh, using a Polar Satellite Launch Vehicle (PSLV) rocket C25 at 09:08 UTC (14:38 IST) on 5 November 2013".</i></p>

<p>The secret behind this successful launch was the launch pad that ISRO used. An important part of the launch pad is the launch tower. It is the long vertical structure which supports the rocket.</p>
<p>ISRO now wants to build a better launch pad for their next mission. For this, ISRO has acquired a long steel bar, and the launch tower can be made by cutting a segment from the bar. As part of saving the cost, the bar they have acquired is not homogeneous.<br />
The bar is made up of several blocks, where the <b>i<sup>th</sup></b> block has durability <b>S[i]</b>, which is a number between <b>0</b> and <b>9</b>. A segment is defined as any contiguous group of one or more blocks.</p>
<p>If they cut out a segment of the bar from i<sup>th</sup> block to j<sup>th</sup> block (i&lt;=j), then the durability of the resultant segment is given by <b>( S[i]*10<sup>(j-i)</sup> + S[i+1]*10<sup>(j-i-1)</sup> + S[i+2]*10<sup>(j-i-2)</sup> + &hellip; + S[j] * 10<sup>(0)</sup> ) % M</b>.</p>
<p>In other words, if <b>W<sub>(i,j)</sub></b> is the base-10 number formed by concatenating the digits <b>S[i], S[i+1], S[i+2], &hellip;, S[j]</b>, then the durability of the segment (i,j) is <b>W<sub>(i,j)</sub> % M</b>.</p>

<p>For technical reasons that ISRO will not disclose, the durability of the segment used for building the launch tower should be exactly <b>L</b>. Given <b>S</b> and <b>M</b>, find the number of ways ISRO can cut out a segment from the steel bar whose durability is <b>L</b>.</p>

<h3>Input</h3>
<p>The first line contains a string <b>S</b>. The i<sup>th</sup> character of this string represents the durability of i<sup>th</sup> segment.</p>
<p>The next line contains a single integer <b>Q</b>, denoting the number of queries.</p>
<p>Each of the next <b>Q</b> lines contain two space separated integers, denoting <b>M</b> and <b>L</b>.</p>
<h3>Output</h3>
<p>For each query, output the number of ways of cutting the bar on a separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>|S|</b> &le; <b>2 * 10^4</b></li>
<li><b>Q &le; 5</b></li>
<li><b>0</b> &lt; <b>M</b> &lt; <b>500</b></li>
<li><b>0</b> &le; <b>L</b> &lt; <b>M</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
23128765
3
7 2
9 3
15 5

<b>Output:</b>
9
4
5
</pre>
<h3>Explanation</h3>
<p>For M=9, L=3, the substrings whose remainder is 3 when divided by 9 are: 3, 31287, 12 and 876.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>