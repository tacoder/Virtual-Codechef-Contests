<?php require("../../includes/header.php"); ?><h1>Compilers and parsers</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/COMPILER.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/COMPILER.pdf">Russian</a>.</h3>
<p>Lira is now very keen on compiler development. :) </p>
<p>She knows that one of the most important components of a compiler, is its parser.</p>
<p>A parser is, in simple terms, a software component that processes text, and checks it's semantic correctness, or, if you prefer, if the text is properly built.</p>
<p>As an example, in declaring and initializing an integer, in C/C++, you can't do something like:</p>
<p> int = x ;4</p>
<p>as the semantics of such statement is incorrect, as we all know that the datatype must precede an identifier and only afterwards should come the equal sign and the initialization value, so, the corrected statement should be:</p>
<p> int x = 4;</p>
<p>Today, Lira is concerned with an abstract instruction which is composed of the characters "&lt;" and "&gt;" , which she will use on the design of her language, L++ :D.</p>
<p>She is using it as an abstraction for generating XML code Tags in an easier fashion and she understood that, for an expression to be valid, a "&lt;" symbol must always have a corresponding "&gt;" character somewhere (not necessary immediately) after it. Moreover, each "&gt;" symbol should correspond to exactly one "&lt;" symbol.</p>
<p>So, for instance, the instructions:</p>
<p> <b> &lt;&lt;&gt;&gt; </b></p>
<p><b> &lt;&gt; </b></p>
<p><b> &lt;&gt;&lt;&gt; </b></p>
<p>are all valid. While:</p>
<p><b> &gt;&gt; </b></p>
<p><b> &gt;&lt;&gt;&lt; </b></p>
<p>are not.</p>
<p>Given some expressions which represent some instructions to be analyzed by Lira's compiler, you should tell the length of the longest prefix of each of these expressions that is valid, or <b>0</b> if there's no such a prefix.</p>
<h3>Input</h3>
<p>Input will consist of an integer <b>T</b> denoting the number of test cases to follow.</p>
<p>Then, <b>T</b> strings follow, each on a single line, representing a possible expression in L++.</p>
<h3>Output</h3>
<p>For each expression you should output the length of the longest prefix that is valid or <b>0</b> if there's no such a prefix. </p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>The length of a single expression</b> ≤ <b>10<sup>6</sup></b></li>
<li>The total size all the input expressions is no more than <b>5*10<sup>6</sup></b></li>

<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
&lt;&lt;&gt;&gt;
&gt;&lt;
&lt;&gt;&gt;&gt;
<b>Output:</b>
4
0
2

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuruma">kuruma</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-01-2014</td>
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