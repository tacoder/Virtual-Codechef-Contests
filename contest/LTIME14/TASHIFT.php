<?php require("../../includes/header.php"); ?><h1>Shift The String</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME14/mandarin/TASHIFT.pdf">Mandarin Chinese </a>.</h3>
<p> </p>
<p>You are given two strings <b>A</b> and <b>B</b> of the same length. Each string contains <b>N</b> Lower case Latin character (from 'a' to 'z'). A shift operation will remove the first character of a string and add the same character at the end of that string. For example after you perform a shift operation on a string 'abcd', the new string will be 'bcda'. If you perform this operation two times, the new string will be 'cdab'. You need to use some (maybe none) shift operations on the string <b>B</b> to maximize the length of the longest common prefix of <b>A</b> and <b>B</b>. If more than one result can be found pick the one that use smallest number of shift operations.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b>. The second and the third lind contains the string <b>A</b> and <b>B</b> respectively.</p>
<p> </p>
<h3>Output</h3>
<p>Contains a single integer which is the number of shift operations.</p>
<p> </p>
<h3>Constraints</h3>
<p>30 points:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5000</b></li>
</ul>
<p>30 points:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
</ul>
<p>40 points:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
ccadd
bddcc

<b>Output:</b>
3

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-07-2014</td>
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