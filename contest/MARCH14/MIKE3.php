<?php require("../../includes/header.php"); ?><h1>Mike and Stamps</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/MIKE3.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/MIKE3.pdf">Russian</a>.</h3>
<p>Mike is fond of collecting stamps. He has a lot of rare and unusual ones in his collection. Unfortunately, a few days ago he was fired from his well-paid job.</p>
<p>But he doesn't complain about that, he acts! That's why Mike picked up <b>N</b> stamps from his collection and is going to sell them. He has already placed an announcement on the Internet and got <b>M</b> offers. Each offer can be described as a set of stamps, that the buyer wants to buy. Now Mike needs your help to choose a set of offers, that he should accept. </p>
<p>He can't accept offers partially. Also, as far as Mike has the only copy of each stamp, he can sell one stamp to at most one buyer.</p>
<p>Of course, Mike wants to maximize the number of accepted offers. Help him!
</p>
<h3>Input</h3>

<p>The first line contains two integer <b>N</b> and <b>M</b>, denoting the number of the stamps and the number of the offers.</p>
<p>The next <b>M</b> lines contain the descriptions of the offers. The <b>(i+1)</b>'th line of the input contains the description of the <b>i</b>'th offer and corresponds to the following pattern: <b>K<sub>i</sub></b> <b>A<sub>i,  1</sub></b> <b>A<sub>i,  2</sub></b>, ..., <b>A<sub>i,     K<sub>i</sub></sub></b>. <b>K<sub>i</sub></b> - is the number of the stamps, which the <b>i</b>'th buyer wants to buy, <b>A<sub>i</sub></b> - is the list of the stamps sorted in the ascending order.</p>
<p> </p>
<h3>Output</h3>
<p>Output should contain the only integer, denoting the maximal number of the offers, that Mike can accept.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 20,000</p>
<p>1 ≤ <b>M</b> ≤ 20</p>
<p>1 ≤ <b>K<sub>i</sub></b></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 3
2 1 2
2 2 3
2 3 4

<b>Output:</b>
2
</pre><p> </p>
<h3>Explanation</h3>
<p>In the example test Mike should accept the first and the third offer.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-01-2014</td>
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