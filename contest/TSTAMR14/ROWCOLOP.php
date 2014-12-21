<?php require("../../includes/header.php"); ?><h1>Row and Column Operations</h1><div class="content">

<p>You are given an <b>N × N</b> grid initially filled by zeros. Let the rows and columns of the grid be numbered from <b>1</b> to <b>N</b>, inclusive. There are two types of operations can be applied to the grid:</p>
<ul>
<li><b>RowAdd R X</b>: all numbers in the row <b>R</b> should be increased by <b>X</b>.</li>
<li><b>ColAdd C X</b>: all numbers in the column <b>C</b> should be increased by <b>X</b>.</li>
</ul>
<p>Now after performing the sequence of such operations you need to find the maximum element in the grid.</p>
<h3>Input</h3>
<p>The first line of the input contains two space separated integers <b>N</b> and <b>Q</b> denoting the size of the grid and the number of performed operations respectively. Each of the following <b>Q</b> lines describe an operation in the format described above.</p>
<h3>Output</h3>
<p>Output a single line containing the maximum number at the grid after performing all the operations.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>314159</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>314159</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>3141</b></li>
<li><b>1</b> ≤ <b>R, C</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2 4
RowAdd 1 3
ColAdd 2 1
ColAdd 1 4
RowAdd 2 1

<b>Output:</b>
7
</pre><h3>Explanation</h3>
<p>The grid changes as follows:</p>
<pre><code>00  33  34  74  74
00  00  01  41  52</code></pre><p>The maximum number in the final grid is 7.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2013</td>
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
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>