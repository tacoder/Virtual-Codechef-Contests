<?php require("../../includes/header.php"); ?><h1>Permutation Shuffle</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/mandarin2/PERMSUFF.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/russian/PERMSUFF.pdf">Russian</a> as well.</h3>
<p>
You are given a permutation of natural integers from <b>1</b> to <b>N</b>, inclusive. Initially, the permutation is <b>1, 2, 3, ..., N</b>.</p>
<p>You are also given <b>M</b> pairs of integers, where the <b>i</b>-th is (<b>L<sub>i</sub></b> <b>R<sub>i</sub></b>). In a single turn you can choose any of these pairs (let's say with the index <b>j</b>) and arbitrarily shuffle the elements of our permutation on the positions from <b>L<sub>j</sub></b> to <b>R<sub>j</sub></b>, inclusive (the positions are 1-based). You are not limited in the number of turns and you can pick any pair more than once.</p>
<p>
The goal is to obtain the permutation <b>P</b>, that is given to you. If it's possible, output "Possible", otherwise output "Impossible" (without quotes).
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space separated integers <b>N</b> and <b>M</b> denoting the size of the permutation <b>P</b> and the number of pairs described above. </p>
<p>The next line contains <b>N</b> integers - the permutation <b>P</b>.</p>
<p>Each of the following <b>M</b> lines contain pair of integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>35</b></li>
<li><b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
7 4
3 1 2 4 5 7 6
1 2
4 4
6 7
2 3
4 2
2 1 3 4
2 4
2 3

<b>Output:</b>
Possible
Impossible

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-04-2014</td>
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