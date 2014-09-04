<?php require("../../includes/header.php"); ?><h1>Arranging the Appetizers</h1><div class="content">

<p>
The Chef has prepared the appetizers in the shapes of letters to spell a special message for the guests. There are n appetizers numbered from 0 to n-1 such that if the appetizers are arrayed in this order, they will display the message. The Chef plans to display them in this order on a table that can be viewed by all guests as they enter. The appetizers will only be served once all guests are seated.</p>
<p>
The appetizers are not necessarily finished in the same order as they are numbered. So, when an appetizer is finished the Chef will write the number on a piece of paper and place it beside the appetizer on a counter between the kitchen and the restaurant. A server will retrieve this appetizer and place it in the proper location according to the number written beside it.</p>
<p>
The Chef has a penchant for binary numbers. The number of appetizers created is a power of 2, say n = 2<sup>k</sup>. Furthermore, he has written the number of the appetizer in binary with exactly k bits. That is, binary numbers with fewer than k bits are padded on the left with zeros so they are written with exactly k bits.</p>
<p>
Unfortunately, this has unforseen complications. A binary number still "looks" binary when it is written upside down. For example, the binary number "0101" looks like "1010" when read upside down and the binary number "110" looks like "011" (the Chef uses simple vertical lines to denote a 1 bit). The Chef didn't realize that the servers would read the numbers upside down so he doesn't rotate the paper when he places it on the counter. Thus, when the server picks up an appetizer they place it the location indexed by the binary number when it is read upside down.</p>
<p>
You are given the message the chef intended to display and you are to display the message that will be displayed after the servers move all appetizers to their locations based on the binary numbers they read.</p>
<h3>Input</h3>

<p>
The first line consists of a single integer T ≤ 25 indicating the number of test cases to follow. Each test case consists of a single line beginning with an integer 1 ≤ k ≤ 16 followed by a string of precisely 2<sup>k</sup> characters. The integer and the string are separated by a single space. The string has no spaces and is composed only of lower case letters from `a` to `z`.</p>
<h3>Output</h3>

<p>
For each test case you are to output the scrambled message on a single line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 chef
4 enjoyourapplepie

<b>Output:</b>
cehf
eayejpuinpopolre
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-08-2010</td>
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