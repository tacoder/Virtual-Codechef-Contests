<?php require("../../includes/header.php"); ?><h1>A Tale of Two Strings</h1><div class="content">

<p>Two strings can be shuffled by interspersing their letters to form a new string, much like two piles of cards can be shuffled to form a single pile.</p>
<p>For example, the strings HELLO and WORLD can be shuffled to form HWEOLRLLOD, or HEWORLLLDO, or perhaps simply HELLOWORLD. It is not a shuffle if the original order of letters is not preserved. For example, the D in WORLD cannot ever appear before the R after being shuffled. This means that EHLLOWRDLO, for instance, is not a shuffle of HELLO and WORLD, even though it contains all the original letters. A string is a shuffle of twins if it can be formed by shuffling two identical strings.</p>
<p>For example, ABACBDECDE is a shuffle of twins because it can be formed by shuffling ABCDE and ABCDE. DBEACBCADE is not a shuffle of twins because it cannot be formed by shuffling two identical strings.<br />
All the strings will contains only UPPERCASE letters.</p>
<p>In case, no twins exist output “Twins don’t exist” (quotes only for clarity).</p>
<p>All strings will contain only UPPERCASE letters.</p>
<h3>Input</h3>
<p>The first line of the input will is integer T denoting the number of testcases.</p>
<p>Next T lines contain the shuffled string <b>S. The input string can contain upto N letters.</b></p>
<h3>Output</h3>
<p>For every testcase, output a single line containing one of the two identical strings that make up the input string.</p>
<p>If the no such pair of identical strings exist, print "Twins don't exist". (quotes only for clarity).</p>
<h3>Constraints</h3>
<p>1 &lt;= T &lt;= 10</p>
<p>2 &lt;= N &lt;= 10<sup>6</sup></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
ABACBDECDE
DBEACBCADE

<b>Output:</b>
ABCDE
Twins don't exist
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/troika_bytes13">troika_bytes13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-02-2013</td>
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