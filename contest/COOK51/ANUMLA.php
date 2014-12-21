<?php require("../../includes/header.php"); ?><h1>Mahesh and his lost array</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/mandarin/ANUMLA.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/russian/ANUMLA.pdf">Russian</a> as well.</h3>
<p>
Mahesh got a beautiful array named <b>A</b> as a birthday gift from his beautiful girlfriend Namratha. There are <b>N</b> positive integers in that array. Mahesh loved the array so much that he started to spend a lot of time on it everyday. One day, he wrote down all possible subsets of the array. Then for each subset, he calculated the sum of elements in that subset and wrote it down on a paper. Unfortunately, Mahesh lost the beautiful array :(. He still has the paper on which he wrote all subset sums. Your task is to rebuild beautiful array <b>A</b> and help the couple stay happy :)
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br />
First line of each test case contains one integer <b>N</b>, the number of elements in <b>A</b>.<br />
Second line of each test case contains <b>2^N</b> integers, the values written on paper</p>
<h3>Output</h3>
<p>For each test case, output one line with <b>N</b> space separated integers in non-decreasing order.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b>
</li><li><b>1</b> ≤ <b>N</b> ≤ <b>15</b>
</li><li><b>0</b> ≤ <b>Values on paper</b> ≤ <b>10^9</b>
</li><li><b>All input values are valid. A solution always exists</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input</b>
2
1
0 10
2
0 1 1 2

<b>Output</b>
10
1 1
</pre><h3>Explanation</h3>
<p><b>Test case #2</b><br />
For the array [1,1], possible subsets are {}, {1}, {1}, {1,1}, respective sums are 0, 1, 1, 2.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>14-10-2014</td>
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