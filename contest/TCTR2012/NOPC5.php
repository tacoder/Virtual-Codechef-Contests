<?php require("../../includes/header.php"); ?><h1>Compress the bits for bots</h1><div class="content">

<p>Decepticons have also learned about the network on which we rely upon. They have known that human-created network and computers work only on binary information, either 0 or 1. Due to this, these highly advance species are trying to uncover each and every message sent between computers by human. Our each and every strategy to fight them back is already unrevealed to them. However &ldquo;Data compression&rdquo; technique is still a reliable method that cannot be decoded by them. This increases effective data density and speeds up data transfer rates. One possible method to compress any binary message is the following: Replace any maximal sequence of n 1's with the binary version of n whenever it shortens the length of the message.<br />
For example, the compressed form of the data 11111111001001111111111111110011 becomes 10000010011110011. The original data is 32 bits long while the compressed data is only 17 bits long.<br />
The drawback of this method is that sometimes the decompression process yields more than one result for the original message, making it impossible to obtain the original message. Write a program that determines if the original message can be obtained from the compressed data when the length of the original message (L), the number of 1's in the original message (N) and the compressed data are given. The original message will be no longer than 16 Kbytes and the compressed data will be no longer than 40 bits. </p>
<h3>Input</h3>
<p>The input file contains several test cases. Each test case has two lines. The first line contains L and N and the second line contains the compressed data. The last case is followed by a line containing two zeroes. </p>
<h3>Output</h3>
<p>For each test case, output a line containing the case number (starting with 1) and a message YES, NO or NOT UNIQUE. YES means that the original message can be obtained. NO means that the compressed data has been corrupted and the original message cannot be obtained. NOT UNIQUE means that more than one message could have been the original message. Follow the format shown in the sample output.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
32 26
10000010011110011

<b>Output:</b>
YES
<b>Input:</b>
9 7
1010101
<b>Output:</b>
NOT UNIQUE
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bestankur007">bestankur007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-03-2012</td>
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