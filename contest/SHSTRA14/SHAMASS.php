<?php require("../../includes/header.php"); ?><h1>New York Magnets</h1><div class="content">
<p>
Abhiram is always playful like a small kid. This time around he has caught his old fascination to play with magnets (sigh!). He then challenges his friend Akshay saying let me test if you still know your basic physics(yeah, he actually said that to Akshay! ). He says, suppose I have these n magnets, and I have a destination wall made of iron. Let the iron wall be at a distance d from where I start releasing these magnets. Each of these magnets I will release at different times at initial speed of 0. Akshay immediately pounces saying then how can these magnets even make it till the wall. Abhiram then throws the twist.
</p>
<p>
He says these were special magnets which were bought in New York. They have the ability to roll. Whats more, they can accelerate while rolling. He continues saying, but the twist is a magnet that was behind another magnet comes side by side to the magnet ahead, they stick to each other. Now they start moving at the pace of the magnet that was ahead. Also, apparently motion in magnetic field causes other effects(So Abhiram claims !), the magnets are wired to reach a maximum speed beyond which it wont accelerate. So he says if I give you the distance d, the acceleration of the magnet as set by the manufacturer, the times I release each magnet and the maximum speed for each magnet, can you tell me the time when they reach the iron wall . Akshay as usual takes out his notebook and starts off with there exists a distance d such that .. But the fact was Abhiram wasn't really prepared with the answers. Please assist him with the values so that he can verify Akshay's claim.</p>

<p> </p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains three integers <b>N , A , D</b> denoting the number of magnets Abhiram has, A is the acceleration of the magnets as set by the manufacturer and D is the distance from the iron wall.<br />
Then <b>N</b> lines follow. The ith line contains the description of the ith magnet released by Abhiram. It contains two space separated integers T_i and V_i, the time at which the magnet was released and the maximum velocity it can attain.
</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, output <b>N</b> lines. ith line containing the time at which the time at which the ith magnet reaches the wall. Please do <b>not</b> add extra lines after a particular case.  <br /><br />
Ignore floating point rounding upto 10^-6.
</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^4</b></li>
<li><b>1</b> ≤ <b>D,A</b> ≤ <b>10^6</b></li>
<li><b>1</b> ≤ <b>T_i , V_i</b> ≤ <b>10^6</b></li>
<li><b>T_1</b> &lt; <b>T_2</b> &lt; <b>T_3</b>..<b>T_n</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 6 19
12 3
20 24
30 2

<b>Output:</b>
18.583333
22.516611
39.6666667
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikabinav">karthikabinav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-01-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>