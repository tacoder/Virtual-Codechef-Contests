<?php require("../../includes/header.php"); ?><h1>Big Number</h1><div class="content">
<p>Given a binary represantation of number <b>N</b>. You are to find how many numbers from <b>0</b> to <b>N</b> have <b>even</b> number of <b>ones</b> in their binary represantation.<br /><br /> There is also an update operation, update <b>(L,R)</b>, which means that all bits of <b>N</b> from <b>L<sup>th</sup></b> to <b>R<sup>th</sup></b> are flipped, i.e. ones to zeroes and vice versa. You have to also find the answer after each of these updates.</p>
<h3>Input</h3>
<p>The first line of input file contains binary represantation of number <b>N</b>. The second line contains number <b>M</b> - the number of update queries. Then <b>M</b> lines follow that describe each update query by two numbers - <b>L</b> and <b>R</b>. Note that the digits of <b>N</b> are numbered from left to right. That is, the leftmost(most significant) bit is numbered <b>1</b>.</p>
<h3>Output</h3>
<p>Output the answer for initial value of <b>N</b> and also after each of the <b>M</b> updates modulo <b>10<sup>9</sup>+7</b> in separate lines.</p>
<h3>Constraints</h3>
<ul>
<li> <b>1 ≤ L ≤ R ≤ </b> number of bits in  <b>N ≤ 10<sup>6</sup> </b></li>
<li><b> 1 ≤ M ≤ 10<sup>5</sup></b></li>
<li> all digits of <b>N</b> are either <b>'0'</b> or <b>'1'</b>. </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
000
5
3 3
2 3
3 3
2 3
1 3

<b>Output:</b>
1
1
1
2
1
4
</pre>
<p> </p>
<h3>Explanation</h3>
<p>After the final operation, <b>N</b> becomes 7. All numbers in range <b>[0..7]</b> that have even number of ones in their binary representation are: <b>0, 3, 5</b> and <b>6</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/utkarsh_lath">utkarsh_lath</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-09-2013</td>
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