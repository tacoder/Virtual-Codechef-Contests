<?php require("../../includes/header.php"); ?><h1>Nesting a Bunch of Brackets</h1><div class="content">

<p>
In this problem we consider expressions containing brackets that are properly nested. These expressions are obtained by juxtaposition of properly netsted expressions in a pair of matching brackets, the left one an opening and the right one a closing bracket. </p>
<p>( a + $ ( b = ) ( a ) ) is properly nested <br/></br/></p>
<p>( a + $ ) b = ) ( a ( ) is not. </p>
<p>In this problem we have several pairs of brackets, so we have to impose a second condition on the expression: the matching brackets should be of the same kind. Consequently (()) is OK, but ([)) is not. The pairs of brackets are:<br />
 (    )<br />
 [    ]<br />
 {    }<br />
 &lt;    ><br />
 (*   *)<br />
The two characters '(*' should be interpreted as one symbol, not as an opening bracket '(' followed immediately by an asterisk, and similarly for '*)'. The combination '(*)' should be interpreted as '(*' followed by ')'. </p>
<p>Write a program that checks wheter expressions are properly nested. If the expression is not properly nested your program should determine the position of the offending bracket, that is the length of the shortest prefix of the expression that can not be extended to a properly nested expression. Don't forget '(*' counts as one, as does '*)'. The characters that are not brackets also count as one.</p>
<h3>Input</h3>
<p>Input description...<br />
The input is a text-file. Each line contains an expression to be checked followed by and end-of-line marker. No line contains more than 3000 characters. The input ends with a standard end-of-file marker.</p>
<h3>Output</h3>
<p>Output description...<br />
The output is a textfile. Each line contains the result of the check of the corresponding inputline, that is YES (in upper case), if the expression is OK, and (if it is not OK) NO followed by a space and the position of the error.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
(*a++(*)
(*a{+}*)

<b>Output:</b>
NO 6
YES
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>