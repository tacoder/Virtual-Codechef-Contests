<?php require("../../includes/header.php"); ?><h1>Andrew and the Birthday</h1><div class="content">
<p>Today is Andrew's birthday.</p>
<p>He has invited <b>N</b> friends for celebrating it, and now he needs to prepare the table for them. All his friends will be sitting in a row on the seats numbered from <b>1</b> to <b>N</b>, inclusive. There are <b>M</b> different types of meatballs (numbered from <b>1</b> to <b>M</b>, inclusive). Andrew is going to serve meatballs of exactly one type at each of the seats.</p>
<p>You are an given array <b>A</b> of <b>N</b> integers in range <b>[0, M]</b>. <b>A<sub>i</sub> = 0</b> means that Andrew is not sure which type of meatballs he should serve at seat <b>i</b>. So, in this case, we consider seat <b>i</b> will be served meatballs of types from <b>1</b> to <b>M</b> with equal probability. Otherwise, <b>A<sub>i</sub> ≥ 1</b> means that seat <b>i</b> will be served meatballs of type <b>A<sub>i</sub></b>.</p>
<p>It's very important for Andrew to know, what is the expected maximal number of consecutively sitting friends with the same type of meatballs served at their seats. Help Andrew to find this number.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a real number, denoting the expected value of maximal number of consecutively sitting friends with the same type of meatballs served to their seats.</p>
<p>The output values will be considered as correct if and only if they have the absolute errors at most <b>10<sup>−6</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>50</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>M</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 2
0 0
4 7
0 1 1 0

<b>Output:</b>
1.500000000
2.285714286
</pre><h3>Explanation</h3>
<p><b>Example case 1</b>: There are <b>4</b> possibilities (with equal probability) of the serving as follows.<br /><b>1 1</b> : maximal number of consecutive seats with the same type = <b>2</b><br /><b>1 2</b> : maximal number of consecutive seats with the same type = <b>1</b><br /><b>2 1</b> : maximal number of consecutive seats with the same type = <b>1</b><br /><b>2 2</b> : maximal number of consecutive seats with the same type = <b>2</b><br />Therefore the answer is <b>2 * (1/4) + 1 * (1/4) + 1 * (1/4) + 2 * (1/4) = 1.5</b>.</p>
<p><b>Example case 2</b>: There are <b>49</b> possibilities of the serving. Among these, the patterns with maximal number of consecutive seats with the same type = <b>3</b> are the following <b>12</b> patterns<br /><b>1 1 1 x</b>, where <b>x = 2, 3, ..., 7</b><br /><b>x 1 1 1</b>, where <b>x = 2, 3, ..., 7</b><br />and the pattern with maximal number of consecutive seats with the same type = <b>4</b> is the following <b>1</b> pattern<br /><b>1 1 1 1</b><br />In other <b>36</b> patterns, maximal number of consecutive seats with the same type = <b>2</b>. Therefore the answer is <b>2 * (36/49) + 3 * (12/49) + 4 * (1/49) ≈ 2.2857</b>.</p>
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
            <td>20-03-2012</td>
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