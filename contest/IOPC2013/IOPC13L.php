<?php require("../../includes/header.php"); ?><h1>Save the princess</h1><div class="content">

<p>
Princess Leia is trapped in Alderaan. C3PO and R2D2 get in the country to save her. There are bombs kept at various locations which C3PO and R2D2 have been able to figure out.<br />
They don’t know where Princess Leia is, therefore they decide to dispose all the bombs off to ensure her safety. But as they have already used most of their strength in figuring out where the bombs are, they don’t have much strength left and want to dispose all the bombs by moving as less as possible. So they decide to split. They can start at any of the bombs’ locations, but unfortunately the bombs have been programmed such that if a bomb <b>i</b> is diffused after a bomb <b>j</b> with <b>i</b> &lt; <b>j</b> then the <b>i<sup>th</sup></b> bomb and all the other remaining bombs get detonated; thereby killing the princess.<br />
Though R2D2 and C3PO have split, they can still communicate with each other. R2D2 uses his analytical skills to figure out a way in which they should proceed, but it is not optimal. You need to help them in saving the princess by minimizing the sum of the total manhattan distance R2D2 travels and the total manhattan distance C3PO travels. You need to output the minimum sum over all possible ways in which they can diffuse all the bombs.
</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>First line of each test case is the number of bombs <b>N</b>. </p>
<p>Each of the next <b>n</b> lines contains three space separated integers, where the i<sup>th</sup> line contains <b>x<sub>i</sub> y<sub>i</sub> z<sub>i</sub></b>, the coordinates of the i<sup>th</sup> bomb. </p>
<h3>Output</h3>
<p>
For each test case output a single line containing the minimum sum of the total manhattan distance R2D2 travels and total manhattan distance C3PO travels in order to dispose all the bombs off.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>5</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>x,y,z</b> ≤ <b>5000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
2 3 4
0 4 5
3 4 1

<b>Output:</b>
4
</pre><h3>Explanation</h3>
<p>C3PO starts at (2,3,4) and R2D2 starts at (3,4,1). C3PO first diffuses the bomb 1, then it moves to (0,4,5) to defuse bomb 2 then C3PO diffuses bomb 3. So the total distance they need to move is 4.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>