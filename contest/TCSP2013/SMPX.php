<?php require("../../includes/header.php"); ?><h1>Simple Syntax</h1><div class="content">

<p>
In the land of Hedonia the offcial language is Hedonian. A Hedonian professor had noticed that many of her students still did not master the syntax of Hedonian well. Tired of correcting the many syntactical mistakes, she decided to challenge the students and asked them to write a program that could check the syntactical correctness of any sentence they wrote. Similar to the nature of Hedonians, the syntax of Hedonian is also pleasantly simple. Here are the rules:<br/><br />
0. The only characters in the language are the characters p through z and N, C, D, E, and I.<br/><br />
1. Every character from p through z is a correct sentence.<br/><br />
2. If s is a correct sentence, then so is Ns.<br/><br />
3. If s and t are correct sentences, then so are Cst, Dst, Est and Ist.<br/><br />
4. Rules 0. to 3. are the only rules to determine the syntactical correctness of a sentence.<br/><br />
You are asked to write a program that checks if sentences satisfy the syntax rules given in Rule 0. - Rule 4. </br/></br/></br/></br/></br/></br/></p>
<h3>Input</h3>
<p>The input consists of a number of sentences consisting only of characters p through z and N, C, D, E, and I. Each sentence is ended by a new-line character. The collection of sentences is terminated by the end-of- file character. If necessary, you may assume that each sentence has at most 256 characters and at least 1 character. </p>
<h3>Output</h3>
<p>The output consists of the answers YES for each well-formed sentence and NO for each not-well-formed sentence. The answers are given in the same order as the sentences. Each answer is followed by a new-line character, and the list of answers is followed by an end-of- file character. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
Cp
Isz
NIsz
Cqpq

<b>Output:</b>
NO
YES
YES
NO
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/assasin143">assasin143</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-01-2013</td>
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