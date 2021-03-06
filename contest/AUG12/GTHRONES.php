<?php require("../../includes/header.php"); ?><h1>A Game of Thrones</h1><div class="content">

<p>Bran and Tyrion are the last two high lords fighting for the Iron Throne. With a mutual agreement that included all knights of the realm, it was decided to settle the issue with a game of thrones, of course not a game of swords but a game of numbers, after all one of them is a cripple and other is a dwarf. Seven wisest men of the realm came forward and forged rules of this game which are as follows :</p>
<ol>
<li>Initially <b>N</b> numbers were written down on a notebook (possibly with multiple copies of every number).</li>
<p><br/></br/></p>
<li>Players alternate their turns with Bran playing first.</li>
<p><br/></br/></p>
<li>In the first turn Bran gets to choose a number of his choice from the numbers written on the notebook and declare it as the current number of the game. </li>
<p><br/></br/></p>
<li>After that in every move this is what they do : let's say the current number of the game is <b>u</b>. They erase <b>u</b> from the notebook (if u was written multiple times, they erase it only once) and declare one of the numbers still written on the notebook <b>v</b> as current number of the game. <b>v</b> can be chosen iff prime factorization of <b>u</b> and <b>v</b> differ by exactly 1 prime factor. ( Read notes for a more formal definition)</li>
<p><br/></br/></p>
<li>The player who can't make a move loses the game. </li>
<p><br/><br/>
</br/></br/></p></ol>
<p>You're one of Varys' spider and he has asked you to predict the outcome of this game beforehand so that he can devise future strategy. So you've to find out who has a winning strategy assuming both players play optimally.</p>
<p><b>Notes: </b> <br/></br/></p>
<p>1) <b>v</b> can be chosen after <b>u</b> iff either of the following conditions hold :<br/></br/></p>
<ol>
<li><b>v</b> > <b>u</b> and <b>u</b> | <b>v</b> and (<b>v</b> / <b>u</b>) is prime <br/></br/></li>
<li><b>u</b> > <b>v</b> and <b>v</b> | <b>u</b> and (<b>u</b> / <b>v</b>) is prime <br/><br/></br/></br/></li>
</ol>
<p>2) A natural number if prime if it has exactly two distinct positive factors. 1 is not a prime number. <br/></br/></p>
<h3>Input</h3>
<p>First line of the input contains a single integer <b>N</b> denoting number of<br />
different numbers written in the notebook. Then follow <b>N</b> lines. Each of<br />
the following lines contain two space separated integers : <b>u<sub>i</sub></b><br />
and <b>c<sub>i</sub></b> where <b>u<sub>i</sub></b><br />
is the i<sup>th</sup> distinct integer written on notebook and it has been repeated <b>c<sub>i</sub></b><br />
number of times.</p>
<h3>Output</h3>
<p>Your program should print Bran if he has a a winning strategy else it should print Tyrion. Also in case Bran could win, your program must output the smallest number Bran could choose in the first turn to ensure a win. See sample output for details. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 3
14 3
21 2

<b>Output:</b>
Bran 21
</pre><h3>Constraints:</h3>
<p>1 &lt;= <b>N</b> &lt;= 500<br/><br />
1 &lt;= <b>u<sub>i</sub></b><br />
&lt;= 10^18<br/><br />
1 &lt;= <b>c<sub>i</sub></b><br />
&lt;= 10^9<br/><br />
All <b>u<sub>i</sub></b><br />
are distinct.<br/></br/></br/></br/></br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/yellow_agony">yellow_agony</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-07-2012</td>
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