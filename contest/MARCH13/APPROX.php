<?php require("../../includes/header.php"); ?><h1>Approximately</h1><div class="content">

<p>Chef has recently learnt some new facts about the famous number <b>&pi;</b>. For example, he was surprised that ordinary fractions are sometimes used to represent this number approximately. For example, <b>22/7</b>, <b>355/113</b> or even <b>103993/33102</b>.</p>
<p>Soon, by calculating the value of <b>22/7</b> and <b>355/113</b> on paper Chef became quite disappointed because these values are not precise enough. For example, <b>22/7</b> differs in the third digit after the decimal point. So, these values are definitely should not be used for serious calculations.</p>
<p>However, Chef doesn't know anything about <b>103993/33102</b>. This fraction is quite inconvenient to calculate on paper. Chef is curious how precise this value is. So he asks you to help him and to calculate the first <b>K</b> digits after the decimal point of such an approximation of <b>&pi;</b>. He consider this ordinary fraction as infinite decimal fraction so formally he asks you to calculate this approximation <b>truncated</b> to the first <b>K</b> digits after the decimal point.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains a single integer <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case output a single line containing the value of <b>103993/33102</b> truncated to the first <b>K</b> digits after the decimal point. Note that for <b>K = 0</b> you should output just <b>"3"</b> without decimal point (quotes are for clarity).</p>
<h3>Constraints</h3>
<ul>
<li><b>0</b> &le; <b>K</b> &le; <b>10<sup>6</sup></b></li>
<li><b>1</b> &le; <b>T</b> &le; <b>2000</b></li>
<li>The sum of <b>K</b> over the input does not exceed <b>10<sup>6</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
0
6
20

<b>Output:</b>
3
3.141592
3.14159265301190260407
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Here <b>K = 0</b> so we don't need to output any digits after the decimal point. The decimal point itself also should not be output.</p>
<p><b>Example case 2.</b> Note that here we <b>truncate</b> (not round) the actual value of <b>103993/33102</b> to <b>6</b> digits after the decimal point. As you see from example case 3 rounded value here differs from truncated one.</p>
<p><b>Example case 3.</b> This example is only to show that this approximation of <b>&pi;</b> is also far from perfect :)</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-12-2012</td>
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