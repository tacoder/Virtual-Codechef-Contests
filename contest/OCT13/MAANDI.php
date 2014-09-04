<?php require("../../includes/header.php"); ?><h1>Maxim and Dividers</h1><div class="content">
<h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/MAANDI.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>
<ul>Maxim likes dividers of the numbers. Also Maxim is fond of <b>lucky numbers</b> of small elephant from Lviv city.</ul></p>
<p> </p>
<p>If you remember, <b>lucky numbers</b> are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky, <b>5</b>, <b>17</b>, <b>467</b> — aren't.</p>
<p> </p>
<p>Now Maxim is interested in the next information: what is the number of the integer positive dividers of number <b>n</b>, which are <b>overlucky</b>.</p>
<p> </p>
<p>We call number <b>overlucky</b> if it is possible to remove some, but not all, digits and during bonding the remaining digits we will receive a lucky number. For example, number <b>72344</b> — overlucky, because it is possible to remove digits <b>2</b> and <b>3</b>, and get number <b>744</b>, which is lucky. Number <b>223</b> isn't overlucky.
</p>
<p> </p>
<h3>Input</h3>
<ul>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. Single line of each test case contains an integer <b>n</b>.</ul>
<p> </p>
<h3>Output</h3>
<ul>For each test case on different lines print the answer to the problem.</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10^9</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
10
1
2
3
4
5
6
7
8
9
10

<b>Output:</b>
0
0
0
1
0
0
1
1
0
0

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-05-2013</td>
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