<?php require("../../includes/header.php"); ?><h1>Quad Numbers</h1><div class="content">
<p>
A Quad is a data container that consists of 4 bits, represented by a hexadecimal number. It has 2 halves - the upper half and the lower half.<br /><br />
Consider a binary number with digits <b>B<sub>1</sub>,B<sub>2</sub>,B<sub>3</sub>,B<sub>4</sub></b> where <b>B<sub>1</sub></b> is the most significant digit and <b>B<sub>4</sub></b> is the least significant digit. The upper half consists of bits <b>B<sub>1</sub></b> and <b>B<sub>2</sub></b>, and the lower half consists of bits <b>B<sub>3</sub></b> and <b>B<sub>4</sub></b>.<br /><br />
<b>Upper half:   ‫      B<sub>1</sub> B<sub>2</sub><br /><br />
Lower half:   B<sub>3</sub> B<sub>4</sub><br /></b><br />
Multiple Quads are placed together, contiguously, from left to right.<br /><br />
Let the binary number formed by contiguously-placed upper halves of Quads be <b>N<sub>1</sub></b>.<br /><br />
Let the binary number formed by contiguously-placed lower halves of Quads be <b>N<sub>2</sub></b>.<br /><br />
For both <b>N<sub>1</sub></b> and <b>N<sub>2</sub></b>, the rightmost digit is least significant and leftmost digit is most significant.<br /><br />
A <b>QuadNumber</b> is the sum of numbers <b>N<sub>1</sub></b> and <b>N<sub>2</sub></b>.<br /><br />
If carry is obtained finally, it is to be ignored. Hence, print only <b>2*N</b> least significant binary digits of the QuadNumber.<br /></p>
<p>Given a set of contiguously placed Quads, find the <b>QuadNumber</b> (binary) formed by it.
 </p>
<h3>Input</h3>
<p>Input consists of 2 lines<br /><br />
The first line contains a single integer <b>N</b>, representing the number of digits in the Hexadecimal number.<br /><br />
The second line contains a contiguous set of Quads (hexadecimal numbers)<br /></p>
<p><b>N</b><br /><br />
<b>Q<sub>1</sub> Q<sub>2</sub> Q<sub>3</sub> Q<sub>4</sub> ... Q<sub>N</sub></b></p>
<h3>Output</h3>
<p>Print a single line containing the <b>QuadNumber</b> in binary.</p>
<h3>Constraints</h3>
<p><br /><br />
<b>1</b> ≤ <b>N</b> ≤ <b>100000</b></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1A

<b>Output:</b>
1000

<b>Input:</b>
2
11

<b>Output:</b>
0101

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-05-2014</td>
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
            <td>C, C99 strict, CAML, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, HASK, JAVA, PAS fpc, PAS gpc, PERL, PERL6, PYTH, PYTH 3.1.2, SCALA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>