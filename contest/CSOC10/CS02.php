<?php require("../../includes/header.php"); ?><h1>CRC</h1><div class="content">

<p>Problem text...<br />
When binary message are transmitted from one machine to another, there is a<br />
chance that some of bits are erroneously changed in transit. In order for the<br />
receiving machine to detect whether an error has occurred, (1) the transmitting<br />
machine sends a certified message consisting of the original message concatenated<br />
with some redundant bits functionally derived from the message, and (2) the<br />
receiving machine concludes no errors occurred after re-computing the redundant<br />
bits and finding them equal to those at the end of the certified message. In this<br />
problem, you will implement the receiving machine's cyclic redundancy code (CRC)<br />
checking algorithm.<br />
The computation of the receiving machine can be defined mathematically. Let x be a<br />
fixed binary string called a generator of length two or more (used in the transmitting<br />
machine's redundant bit calculation) . Let m be a binary string called a certified<br />
message such that |x| &lt; |m|.<br />
Let r0, r1, r2… r|m|-|x|+1 be the sequence of binary strings called residues defined by<br />
r0 = m[1..|x|-1],<br />
ri=((ri-1.m[|x|-1+i])+x)[2..|x|]; if ri-1[1]=1;<br />
ri=(ri-1.m[|x|-1+i])[2..|x|]; if ri-1[1]=0;<br />
The receiving machine concludes no error occurred if the final residue r|m|-|x|+1 is<br />
all zeros.</p>
<h3>Input</h3>

<p>Input description...<br />
The first line of the input contains the generator x. The subsequent lines of input<br />
each contain a certified message m.</p>
<h3>Output</h3>

<p>Output description...<br />
For each certified message m in the input, use the cyclic redundancy check algorithm<br />
of the receiving machine to conclude whether an error occurred in transmission of<br />
the certified message, and output the final residue r|m|-|x|+1.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
10011
11010110111110
01101110000101
10011010010011
10010110111001
11101011110100

<b>Output:</b>
Ok : 0000
Ok : 0000
Error : 1011
Error : 1000
Ok : 0000
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2010</td>
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