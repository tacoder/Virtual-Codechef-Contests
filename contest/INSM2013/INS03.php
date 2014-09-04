<?php require("../../includes/header.php"); ?><h1>Mind your language</h1><div class="content">
<p>The place where our Chef lives is very different. Here, people have special affinity for many words like "hao","haonabe","kuchbhi" and so on...<br />
As you know that all friend of Chef are unique and intelligent. One such friend Dr.Chadda is linguistic. Chef asked Chadda to study this attraction for some special words.
</p>
<p> Dr.Chadda decoded the secret behind the special words and found out the pattern. He came to know that if character a does not like character b then they should not be immediate of each other in the word (i.e,string). If a does not like b and c, then a should not have b or c in the left side and right side of the string.</p>
<p>But he is busy with his work, given bad liking of each character, you have to find the the possible number of special strings of required length N.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer T, denoting the number of test cases. The description of T test cases follows. The 26 lines contains bad liking of each 26 character. The first character of all these 26 line contains an integer pi and pi characters follow which are bad friends of the given character. After all this lines, there is N (length of string).</p>
<h3>Output</h3>
<p>For each test case, output a single line containing on interger, denoting the maximum number of special strings of fixed length of size N modulo 10^9 + 7. (Because the number can be very large)
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>0</b> ≤ <b>pi</b> ≤ <b>26</b></li>
<li><b>0</b> ≤ <b>N</b> ≤ <b>10000 (10^4)</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
25 a b c d e f g h i j k l m n o p q r s t u v w x y
0 
2

<b>Output:</b>
51
</pre><h3>Explanation</h3>
<p>The possible strings of lenght 2 are:<br />
az,za,bz,zb,.............yz,zy total 50<br />
and zz <br /><br />
which is equal to 51 </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/insomnia_adm">insomnia_adm</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 3 sec</td>
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