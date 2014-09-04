<?php require("../../includes/header.php"); ?><h1>Human vs Artificial Intelligence</h1><div class="content">

<p>The classic Two jug problem is to find out if, given 2 jugs, A and B of capacity Ca and Cb, is it possible to get a volume V in jug B.Considering the only moves being - FILLA, FILLB, POURA, POURB, EMPTYA, EMPTYB; where POURA means pouring the water from jug A to B untill either A is empty or B is full.</p>
<p>In a contest between human and Computers to test whether computers can beat humans in solving the problem in minimum moves,  but the judges forgot the computers cannot cheat unless taught to. The participating human cheated as he was able to detect a half filled jug by tilting the jug till the base is just visible above the water level.Hence he could now perform 6 more operations - HFILLA, HFILLB, HPOURA, HPOURB, HEMPTYA, HEMPTYB; where HPOURA means the water from jug A is poured to jug B till jug B is half-filled, or A is empty.</p>
<p>Clearly proving the intelligence of Humans over computers the Human won many cases and others they tied.You need to write a program to detremine if for a given scenario the human won or it was a tie.</p>
<p>Problem Setter: <a href= "http://www.facebook.com/shahzorkhan123">Shahzor Khan</a></p>
<h3>Input</h3>
<p>The first line of input gives the number of test cases, T(0 &lt;= T &lt;= 1000).Next T lines each describe 3 integers Ca, Cb and V,(1 &lt;= Ca, Cb, V &lt;=100) and (Ca&lt;=Cb).</p>
<h3>Output</h3>
<p>For each test case print "WIN BY X MOVES" or "TIED" without the quotes, X here refers to difference between nuber of moves of Human and Computer.<br />
In case the computer didnt finish, X is number of moves for human to win.</p>
<h3>Example:</h3>
<pre>
<b>Input:</b>
2
3 5 4
4 8 1

<b>Output:</b>
WON 
TIED.
</pre><h3>Explaination:</h3>
<p>Computer: FILLB POURB EMPTYA POURB FIILB POURB<br/><br />
Human: HFILLA HFILLB POURA</br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-03-2011</td>
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