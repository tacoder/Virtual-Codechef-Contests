<?php require("../../includes/header.php"); ?><h1>Sereja and Transformation</h1><div class="content">
<h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/SEATRSF.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>
<ul>Sereja has a sequence of <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>. Sereja can do following transformation of the array:</ul></p>
<p> </p>
<li>create a new sequence of <b>n</b> integers<b> b[1], b[2], ..., b[n]</b>in this way:   <img src="http://latex.codecogs.com/gif.latex?b[i] =\min\limits_{j=1}^{n} a[j]- a[i] + \sum\limits_{j=1}^{n} a[j]" border="0" />   <b>(1 ≤ i ≤ n)
<p></p></b>
</li><li>Replace the sequence a by b, i.e., a[i] = b[i] for all i in [1, n] </li>
<p> </p>
<p>Sereja decided to use his transformation <b>k</b> times. Then he computed the value of    <img src="http://latex.codecogs.com/gif.latex?q(r)=\max\limits_{i=1}^{n} r_i - " border="0" /> <img src="http://latex.codecogs.com/gif.latex?\min\limits_{i=1}^{n} r_i" border="0" /> , where <b>r</b> — the sequence obtained after <b>k</b> transformations of sequence <b>a</b>, as described above.</p>
<p> </p>
<p>Sereja lost sequence <b>a</b>, but he was left with the numbers <b>q(r)</b> and <b>k</b>. Now Sereja is interested in the question : what is the number of the sequences of the integers <b>с[1], с[2], ..., с[n]</b>, such that <b>1 ≤ c[i] ≤ m</b> and <b>q(d) = q(r)</b>, where <b>d</b> — the sequence obtained after <b>k</b> transformations of sequence <b>c</b>, as described above.
</p>
<p> </p>
<h3>Input</h3>
<p>
<ul>The first lines contains a single integer T, denoting the number of test cases. Each  test case consist of four integers : <b>n, m, q(r), k</b>.</ul>
</p>
<p> </p>
<h3>Output</h3>
<p>
<ul>In a single line print the remainder of division the answer of the problem on number <b>10^9 + 7</b>.</ul>
</p>
<p> </p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>n, m, q(r), k</b> ≤ <b>10^9</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 1 1 1
2 2 1 1
2 3 1 1

<b>Output:</b>
0
2
4

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-06-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>