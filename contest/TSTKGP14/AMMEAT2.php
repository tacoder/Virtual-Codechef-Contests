<?php require("../../includes/header.php"); ?><h1>Andrew and the Meatballs again</h1><div class="content">
<p>Andrew likes meatballs very much as you know.</p>
<p>He has <b>N</b> plates of meatballs, here the <b>i</b><sup>th</sup> plate contains exactly <b>i</b> meatballs. Andrew wants to take exactly <b>K</b> plates to his trip to Las Vegas.</p>
<p>On this occasion, he wants to choose the <b>K</b> plates by a strange way: if both <b>i</b><sup>th</sup> and <b>j</b><sup>th</sup> plates are chosen, then <b>i</b> and <b>j</b> must not be <a href="http://en.wikipedia.org/wiki/Coprime_integers">relative prime</a>, for all <b>1 ≤ i &lt; j ≤ N</b>.</p>
<p>Please help him to choose <b>K</b> plates. Output one of the possible choices.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line and only line of each test case contains two space-separated integers <b>N</b> and <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case, output <b>K</b> distinct integers, denoting the number of selected plates, where the plates are numbered from <b>1</b> to <b>N</b>. If there are multiple solutions, any one will do. If it is impossible to choose <b>K</b> plates, print only one integer <b>-1</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b> ≤ <b>777</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
100 3
100 100

<b>Output:</b>
45 63 35
-1
</pre><h3>Explanation</h3>
<p><b>Example case 1</b>: One of the possible choices is that he takes <b>45</b><sup>th</sup> plate, <b>63</b><sup>rd</sup> plate, and <b>35</b><sup>th</sup> plate. Because<br /><b>GCD(45, 63) = 9</b>,<br /><b>GCD(45, 35) = 5</b>,<br /><b>GCD(63, 35) = 7</b>.</p>
<p><b>Example case 2</b>: He must choose all <b>N = K</b> plates in this case. But, for example, the pair of <b>3</b><sup>rd</sup> plate and <b>5</b><sup>th</sup> plate does not satisfy his desire. So it is impossible to choose <b>K</b> plates.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-04-2013</td>
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