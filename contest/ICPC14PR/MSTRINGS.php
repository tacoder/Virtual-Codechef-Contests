<?php require("../../includes/header.php"); ?><h1>The Mirror of Galadriel</h1><div class="content">

<p><html> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>The Mirror of Galadriel<br /> </h2>
<p> <i>With water from the stream Galadriel filled the basin to the brim, and breathed on it, and when the water was still again she spoke.     'Here is the Mirror of Galadriel,' she said. 'I have brought you here so that you may look in it, if you will. For this is what your folk would call magic,     I believe; though I do not understand clearly what they mean; and they seem also to use the same word of the deceits of the Enemy.     But this, if you will, is the magic of Galadriel. Did you not say that you wished to see Elf-magic?'</i> - Galadriel to Frodo and Sam, describing her Mirror.</p>
<p> We call a string <b>S</b> magical if every substring of <b>S</b> appears in Galadriel's Mirror (under lateral inversion). In other words, a magical string is a string where every substring has its reverse in the string.</p>
<p> Given a string <b>S</b>, determine if it is magical or not.</p>
<h3>Input (STDIN):</h3>

<p> The first line contains <b>T</b>, the number of test cases. The next <b>T</b> lines contain a string each. </p>
<h3>Output (STDOUT):</h3>

<p> For each test case, output "YES" if the string is magical, and "NO" otherwise.</p>
<h3>Constraints:</h3>

<p><b> 1 &lt;= T &lt;= 100<br /> 1 &lt;= |S| &lt;= 10<br /> S contains only lower-case characters.</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 2<br /> aba<br /> ab</span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> YES<br /> NO</span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p> For the first test case, the list of substrings are : a, b, ab, ba, aba. The reverse of each of these strings is present as a substring of S too.<br /> For the second test case, the list of substring are : a, b, ab. The reverse of "ab", which is "ba" is not present as a substring of the string.</p>
<p>  </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
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