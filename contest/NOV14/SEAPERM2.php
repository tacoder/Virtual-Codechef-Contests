<?php require("../../includes/header.php"); ?><h1>Sereja and Permutations</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/SEAPERM2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/SEAPERM2.pdf">Russian</a>.</h3>
<p>Sereja have permutation <b>p[1], p[2], ..., p[n]</b>. Sereja have made <b>n</b> permutations <b>q[1], q[2], ..., q[n]</b>, <b>q[i]</b> is permutation <b>p</b> without element <b>i</b> (we subtract 1 from all elements bigger than <b>i</b>). For example <b>8 1 2 3 4 5 6 7</b> without <b>5</b> is <b>7 1 2 3 4 5 6</b>. Sereja have made random shuffle of <b>q</b>. Help Sereja find initial permutation <b>p</b>.</p>
<h3>Input</h3>
<p>First line contain number of test cases <b>T</b>. <b>T</b> tests follow. First line of each test case contain number <b>n</b>. Next <b>n</b> lines describe permutations <b>q[1]</b>, <b>q[2]</b>, ..., <b>q[n]</b>. Each line contain <b>n-1</b> number. It is guarantied that there is at least one solution for each test case.</p>
<p> </p>
<h3>Output</h3>
<p>For each test output permutation <b>p</b>. If there is more than one solution - output any.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 10 </b></li>
<li><b>3</b> ≤ <b>n</b> ≤ <b> 300 </b></li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1: <b>3</b> ≤ <b>n</b> ≤ <b> 6 </b> (13 points)</li>
<li>Subtask #2: <b>3</b> ≤ <b>n</b> ≤ <b> 50 </b> (27 points)</li>
<li>Subtask #3: <b>3</b> ≤ <b>n</b> ≤ <b> 300 </b> (60 points)</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
1 2
1 2
1 2

<b>Output:</b>
1 2 3

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-09-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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