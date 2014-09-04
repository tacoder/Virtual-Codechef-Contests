<?php require("../../includes/header.php"); ?><h1>Cipher</h1><div class="content">
<h3>Problem description</h3>
<p>Chef boogy has now moved to deciphering encrypted data from solving complex mathematical problems. He found an encryption algorithm quite interesting. The algorithm is as follows:<br />
Consider a string of N alphabets for example green (N=5). The string is treated as if the last character wraps around back to the first. Next consider a set S of N different strings, in which each string is formed by cyclic rotation of the alphabets of the original string. So for the string green, S = {green, reeng, eengr, engre, ngree}.<br />
The next step is to perform a lexicographical sort in decreasing order on the set of above strings. So S becomes {reeng, ngree, green, engre, eengr}. Now, the encrypted string of N alphabets is formed taking the last character from the above sorted strings. For given example, the encrypted string is gener. The algorithm also specifies the position P of the first character of the encrypted string so that the message can be decrypted i.e. 1 for the given example.<br />
Being a beginner Chef skills are intermediate in cryptography, So, help him decrypt certain encrypted strings.</p>
<h3>Input</h3>
<p>There is a single integer T&lt;=200 on the first line of input which denotes the number of test cases to follow. Each of the next T lines, contains a string made up of k alphabets (a-z characters only) followed by an integer P, separated by a blankspace. 1&lt;=N&lt;=k&lt;=3000.</p>
<h3>Output</h3>
<p>Output consists of T lines, each containing the decrypted string.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
rpcyetn 5
rathe 5
aabb 2

<b>Output:</b>
encrypt
earth
abab
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/giriraj">giriraj</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-03-2014</td>
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