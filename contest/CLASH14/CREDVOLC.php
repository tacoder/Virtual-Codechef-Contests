<?php require("../../includes/header.php"); ?><h1>Volcano</h1><div class="content">
<p> </p>
<p>There is a mountain on Planet Credenz which can be represented by a 2D matrix <b>X</b> of size <b>M</b>x<b>N</b>. Each element of the matrix represents the altitude (height) of the mountain at that location. The mountain has an active volcano which can erupt at any time. The volcano will erupt from a location <b>( i , j )</b> which will be specified in the input. The Lava<br />
will then flow from that position to other positions such that</p>
<li>Lava will flow from a higher altitude to a lower (or equal) altitude towards its 8 neighbors.</li>
<li>In case there is no way for the lava to flow, it will accumulate within it’s boundaries and it will overflow to neighboring positions as soon as its height becomes greater than or equal to the height of any of the neighbors on the boundary.</li>
<li>If lava reaches the boundaries of the mountain, it will stop accumulating and will flow out of the mountain.</li>
<p><br /><br />
Note that lava will not accumulate unless and until it has a path to flow or it can flow out of the mountain. Also, while accumulating the altitude of the lava at each position where it is present will be equal.<br /></p>
<p>For better understanding of these conditions, consider the flow of lava as the flow<br />
of a real world fluid/liquid.<br /></p>
<p>For example if the mountain matrix is like:</p>
<pre>

12 12 12
12  8 12
12 10 12

</pre><p>and the lava originates from the position <b>( 2 ,  2 )</b> with altitude 8 then the lava cannot flow to any neighbor as there is no neighbor which has a lower altitude than or equal to 8. Thus lava will go on accumulating within the boundary and fill up until it reaches an altitude of 10 and then flow out to the location <b>( 3 , 2 )</b>. This is an edge location and thus the the lava will flow out of the mountain from here.</p>
<p>Your task is to find out which locations of the mountain will be covered with lava.<br /><br />
Output a matrix A of size ( <b>M</b> * <b>N</b> ) where :</p>
<pre>
<li><b>A<sub>ij</sub> = 1 </b>if the location <b>( i , j )</b> is covered with lava. </li>
<li><b>A<sub>ij</sub> = 0 </b>if the location <b>( i , j )</b> is not covered with lava.</li></pre>
<p> </p>
<h3>Input</h3>
<p>First line contains two space separated integers, <b>M</b> and <b>N</b>.<br /><br />
<b>M</b> lines follow, each containing <b>N</b> spaced integers representing the altitude of each part of the mountain.</p>
<p>Next line contains two space separated integers <b>i</b> and <b>j</b> denoting the position of eruption of volcano. (The matrix is 1-indexed)<br /> </p>
<p> </p>
<h3>Output</h3>
<p>Output <b>M</b> lines, each containing <b>N</b> spaced integers, that is the matrix A.</p>
<p> </p>
<h3>Constraints</h3>
<p><b>1</b> ≤ <b>M, N</b> ≤ <b>200</b><br /><br />
<b>1</b> ≤ <b>i</b> ≤ <b>M</b><br /><br />
<b>1</b> ≤ <b>j</b> ≤ <b>N</b><br /><br />
<b>1</b> ≤ <b>X<sub>ij</sub></b> ≤ <b>10^6</b><br /></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6 6
6 6 6 6 6 6
6 6 3 3 5 6
6 6 3 3 5 5
6 6 3 4 4 6
5 6 5 6 6 6
5 6 5 6 6 6
2 3

<b>Output:</b>
0 0 0 0 0 0 
0 0 1 1 1 0 
0 0 1 1 1 1 
0 0 1 1 1 0 
0 0 1 0 0 0 
0 0 1 0 0 0
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1</td>
        </tr>
    </table><a href="http://www.codechef.com/submit/CREDVOLC" target="_BLANK"><div id="submitButton">Submit</div></a><?php require("../../includes/footer.php"); ?>