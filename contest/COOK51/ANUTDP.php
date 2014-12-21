<?php require("../../includes/header.php"); ?><h1>The Dirty Path</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/mandarin/ANUTDP.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/russian/ANUTDP.pdf">Russian</a> as well.</h3>
<p>
Bob is currently at origin. Bob walks only on X-axis and towards right always. Bob can walk one unit to right, that is from <b>(a,0)</b> to <b>(a+1, 0)</b>. Bob can also jump two units to right, that is from <b>(a, 0)</b> to <b>(a+2, 0)</b>. However, few coordinates are dirty and Bob does not want to step on those. Bob wants to know the number of ways going to <b>(Y, 0)</b> from <b>(0, 0)</b>. Two ways are considered to be different if there exists an integer <b>j</b> such that the location of Bob after <b>j</b> steps is different.
</p>
<p>
Sounds like a well known problem? Right!! Bob quickly came up with a perfect solution.
</p>
<p>
A valid path should contain '.' which represent a clean coordinate or '#' which represents a dirty coordinate.<br />
If the length of the path is <b>LEN</b>, then Bob's program calculates and prints number of ways to reach <b>(LEN-1, 0)</b> from <b>(0, 0)</b>.
</p>
<p>
An integer <b>X</b> is considered to be a good integer if Bob's program prints <b>X</b> for some valid path.
</p>
<p>You have to write a program to output <b>Y</b>, where <b>Y</b> is <b>N</b><sup>th</sup> good number in the range <b>L</b> to <b>R</b>. You should also print the valid path that would make Bob's program output <b>Y</b>.<br />
If there are multiple valid paths, you can output any of them. Please see the output section for more details.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br />
Only line of each test case contains 3 integers <b>L</b>, <b>R</b> and <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output the <b>N</b> <sup>th</sup> good number, followed by space, followed by a valid path. If no such number exists, just output -1.
</p>
<p>
A valid path should contain '.' which represent a clean coordinate or '#' which represents a dirty coordinate.</p>
<p>For example, "..##.." represents 6 coordinates, (0, 0) (1, 0) .. (5.0) out of which (2, 0) and (3,0) are dirty.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10^5</b>
</li><li><b>0</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b> 10^8</b>
</li><li><b>1</b> ≤ <b>N</b> ≤ <b> 10^5</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input</b>
4
1 3 1
6 9 3
1 3 3
6 9 4

<b>Output</b>
1 .
9 ....#....
3 ....
-1
</pre><h3>Explanation</h3>
<p>
<b>Testcase #1</b> <br />
Good numbers in range [1,3] are 1, 2, 3. 1st of those is 1. There is one way to reach (0, 0) from (0, 0).
</p>
<p>
<b>Testcase #2</b> <br />
Good numbers in range [6,9] are 6, 8, 9. 3rd of those is 9.
</p>
<p>
<b>Testcase #4</b> <br />
There are only 3 good numbers in range [6,9].
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/kostya_by">kostya_by</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>