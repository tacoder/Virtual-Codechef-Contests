<?php require("../../includes/header.php"); ?><h1>Chef and Feedback</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/ERROR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/ERROR.pdf">Russian</a>.</h3>
<p> Lots of geeky customers visit our chef's restaurant everyday. So, when asked to fill the feedback form, these customers represent the feedback using a binary string (i.e a string that contains only characters <b>'0'</b> and <b>'1'</b>. </p>
<p>Now since chef is not that great in deciphering binary strings, he has decided the following criteria to classify the feedback as <b>Good</b> or <b>Bad</b> : <br /><br /></p>
<p>If the string contains the substring <b>"010"</b> or <b>"101"</b>, then the feedback is <b>Good</b>, else it is <b>Bad</b>. Note that, to be <b>Good</b> it is not necessary to have both of them as substring.<br /> <br /></p>
<p> So given some binary strings, you need to output whether according to the chef, the strings are <b>Good</b> or <b>Bad</b>. </p>
<h3>Input</h3>
<p> The first line contains an integer <b>T</b> denoting the number of feedbacks. Each of the next <b>T</b> lines contains a string composed of only <b>'0' </b> and <b>'1'</b>.</p>
<h3>Output</h3>
<p> For every test case, print in a single line <b>Good</b> or <b>Bad</b> as per the Chef's method of classification.</p>
<h3>Constraints</h3>
<ul>
<li><b> 1 </b>≤  <b>T</b> ≤ <b>  100 </b></li>
<li><b> 1 </b> ≤ <b> |S| </b>  ≤ <b> 10<sup>5</sup> </b></li>
</ul>
<p><br /><br />
Sum of length of all strings in one test file will not exceed <b>6*10<sup>6</sup></b>.<br />
<br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
11111110
10101010101010
<br />
<b>Output:</b>
Bad
Good
<br />
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br /><br />
The string doesn't contain <b>010</b> or <b>101</b> as substrings.
 </p>
<p><b>Example case 2.</b><br /><br />
The string contains both <b>010</b> and <b>101</b> as substrings.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/viv001">viv001</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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