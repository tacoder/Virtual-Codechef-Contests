<?php require("../../includes/header.php"); ?><h1>The Army</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/mandarin/ANUARM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/russian/ANUARM.pdf">Russian</a> as well.</h3>
<p>
<b>N</b> Soldiers are lined up for a memory test. They are numbered from 0 to <b>N-1</b> from left to right.
</p>
<p>
In the test, there are <b>M</b> rounds. In each round, Captain selects one position. Soldier at that position will be numbered 0. All the soldiers to the right of selected position will be numbered one greater than the soldier to his left. All the soldiers to the left of selected position will be numbered one greater than the soldier to his right. <br />
eg. if <b>N</b> = 6 and selected position is 3, then the numbering will be [3, 2, 1, 0, 1, 2].
</p>
<p>
 After <b>M</b> rounds, Captain asked each soldier to shout out the greatest number he was assigned during the <b>M</b> rounds. In order to check the correctness, Captain asked you to produce the correct values for each soldier (That is the correct value each soldier should shout out).
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br />
First line of each test case contains two integers, <b>N</b> and <b>M</b>.<br />
Second line of each test case contains <b>M</b> integers, the positions selected by Captain, in that order.</p>
<h3>Output</h3>
<p>For each test case, output one line with <b>N</b> space separated integers.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10^4</b>
</li><li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b>
</li><li><b>1</b> ≤ <b>M</b> ≤ <b>10^5</b>
</li><li><b>1</b> ≤ <b>Sum of N over all testcases</b> ≤ <b>10^5</b>
</li><li><b>1</b> ≤ <b>Sum of M over all testcases</b> ≤ <b>10^5</b>
</li><li><b>0</b> ≤ <b>Positions selected by captain</b> ≤ <b>N-1</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input</b>
2
4 1
1
6 2
2 3

<b>Output</b>
1 0 1 2
3 2 1 1 2 3

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>30-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>