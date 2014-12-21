<?php require("../../includes/header.php"); ?><h1>XOR with Subset</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/XORSUB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/XORSUB.pdf">Russian</a>.</h3>
<p>You have an array of integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>. The function <b>F(P)</b>, where <b>P</b> is a <a href="http://en.wikipedia.org/wiki/Subset">subset</a> of <b>A</b>, is defined as the <a href="http://en.wikipedia.org/wiki/Exclusive_or">XOR</a> (represented by the symbol <b>⊕</b>) of all the integers present in the subset. If <b>P</b> is empty, then <b>F(P)</b>=0.</p>
<p>Given an integer <b>K</b>, what is the maximum value of <b>K</b> <b>⊕</b> <b>F(P)</b>, over all possible subsets <b>P</b> of <b>A</b>?</p>
<h3>Input</h3>
<p>The first line contains <b>T</b>, the number of test cases. Each test case consists of <b>N</b> and <b>K</b> in one line, followed by the array <b>A</b> in the next line.</p>
<h3>Output</h3>
<p>For each test case, print the required answer in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>K</b>, <b>A<sub>i</sub></b> ≤ <b>1000</b></li>
<li>Subtask 1 (30 points):<b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
<li>Subtask 2 (70 points):<b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3 4
1 2 3

<b>Output:</b>
7
</pre>
<h3>Explanation</h3>
<p>
Considering all subsets:<br /><br />
F({}) = 0 ⇒ 4 <b>⊕</b> 0 = 4<br /><br />
F({1}) = 1 ⇒ 4 <b>⊕</b> 1 = 5<br /><br />
F({1,2}) = 3 ⇒ 4 <b>⊕</b> 3 = 7<br /><br />
F({1,3}) = 2 ⇒ 4 <b>⊕</b> 2 = 6<br /><br />
F({1,2,3}) = 0 ⇒ 4 <b>⊕</b> 0 = 4<br /><br />
F({2}) = 2 ⇒ 4 <b>⊕</b> 2 = 6<br /><br />
F({2,3}) = 1 ⇒ 4 <b>⊕</b> 1 = 5<br /><br />
F({3}) = 3 ⇒ 4 <b>⊕</b> 3 = 7<br /><br />
Therefore, the answer is 7.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
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