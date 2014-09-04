<?php require("../../includes/header.php"); ?><h1>Little Elephant and Median</h1><div class="content">

<p>Little Elephant from Zoo of Lviv likes medians so much. Let us define <b>median</b> term for some array <b>A</b>. Let <b>B</b> be the same array <b>A</b>, but sorted in non-decreasing order. Median of <b>A</b> is <b>B<sub>m</sub></b> (1-based indexing), where <b>m</b> equals to <b>(n div 2)+1</b>. Here <b>'div'</b> is an integer division operation. So, for a sorted array with 5 elements, median is the 3rd element and for a sorted array with 6 elements, it is the 4th element.</p>
<p>Little Elephant has an array <b>A</b> with <b>n</b> integers. In one turn he can apply the following operation to any consecutive subarray <b>A[l..r]</b>: assign to all <b>A<sub>i</sub> (l &lt;= i &lt;= r)</b> median of subarray <b>A[l..r]</b>.</p>
<p>Let <b>max</b> be the maximum integer of <b>A</b>. Little Elephant wants to know the minimum number of operations needed to change <b>A</b> to an array of <b>n</b> integers each with value <b>max</b>.</p>
<p>For example, let <b>A = [1, 2, 3]</b>. Little Elephant wants to change it to <b>[3, 3, 3]</b>. He can do this in two operations, first for subarray <b>A[2..3]</b> (after that <b>A</b> equals to <b>[1, 3, 3]</b>), then operation to <b>A[1..3]</b>.</p>
<h3>Input</h3>

<p>First line of the input contains single integer <b>T</b> - the number of test cases. Then <b>T</b> test cases follow, each of such format: first line - integer <b>n</b>, second line - array <b>A</b> consisted of <b>n</b> integers.</p>
<h3>Output</h3>

<p>In <b>T</b> lines print the results for each test case, one per line.</p>
<h3>Constraints</h3>

<p>
1 &lt;= <b>T</b> &lt;= 100
</p>
<p>
1 &lt;= <b>n</b> &lt;= 30
</p>
<p>
1 &lt;= <b>A[i]</b> &lt;= 10^9</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
1 2 3
4
2 1 1 2

<b>Output:</b>
2
1
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-12-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>