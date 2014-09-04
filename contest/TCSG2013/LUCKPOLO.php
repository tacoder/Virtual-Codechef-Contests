<?php require("../../includes/header.php"); ?><h1>Polo and Palin</h1><div class="content">

<p>Chef Palin, as his name suggests, is always very interested in palindromic strings. Recently, he made some interesting discoveries on palindromes. Chef Polo, Palin's friend, likes lucky strings a lot.</p>
<p>A string <b>S</b> is said to be <b>K-lucky</b> if<br />
it does not have a non-empty palindromic substring of length more than or equal to <b>K</b> <br/><br />
<b>For example :</b> string <b>zzyaabb</b> is <b>3-lucky</b> but not <b>2-lucky</b> because it has palindromic substring of length 2 (like zz) while it does not have such substring of length 3.<br />
</br/></p>
<p>
Now Chef Polo has a string <b>S</b> of length <b>N</b>,he asks his friend Palin to find a non-empty <b>K-lucky</b> string <b>P</b> which is lexicographically larger than S and have size equal to <b>S</b> i.e <b>|S|=|P|</b>. If there are more than one such strings then he selects the string which is lexicographically smallest. <br/>But Chef palin is busy and he knows your extra-ordinary programming skills so he wants your help<br/><br />
<b>Note:</b> Given string <b>S</b> may or may not be <b>K-lucky</b> But string <b>P</b> must be <b>K-lucky</b> </br/></br/></p>
<h3>Input</h3>
<p>First line contain an integer <b>K</b>. Next line contain string <b>S</b></p>
<h3>Output</h3>
<p>
single line contains string <b>P</b>. if no such string exists output "<b>NO RESULT</b>" (quotes for clarity).
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>4*10^5</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li>The string consists of lowercase English alphabets.</li>
</ul>
<p> </p>
<h3>Example 1</h3>
<pre><b>Input:</b>
3
zzyzzzz
<b>Output:</b>
NO RESULT
</pre><h3>Example 2</h3>
<pre>
<b>Input:</b>
2
aba
<b>Output:</b>
abc
</pre><h3>Example 3</h3>
<pre>
<b>Input:</b>
3
zzxzzzz
<b>Output:</b>
zzyaabb
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuldeepfouzdar">kuldeepfouzdar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2013</td>
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