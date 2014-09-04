<?php require("../../includes/header.php"); ?><h1>Enemies and Friends</h1><div class="content">

<p>
It is well known that the enemy of my enemy is my friend...</p>
<p>You are to find how many friends someone has following the above well known expression.</p>
<p>
<strong>Input format:</strong><br/><br />
The first line of each test file contains n p, where n is the number of people and p is the number of enemy relationships<br />
The p following line each contain an enemy relationship name1 name2 implying that name1 is the enemy of name2 (and consequently name2 is the enemy of name1) <br/><br />
The following contains the integer q, the number of queries.<br />
The following q lines each contains the name of a person for which we want to know how many friends he has.</br/></br/></p>
<p>
<strong>Output format:</strong><br />
For each of the q test cases, your program must print the number of friends of the respective person in a new line on standard output.</p>
<p>
<strong>Sample Input:</strong><br />
6 7<br />
firoz bobby<br />
bobby Amit<br />
bobby johnny<br />
johnny firoz<br />
lata bobby<br />
geeta lata<br />
geeta firoz<br />
3<br />
firoz<br />
lata<br />
bobby</p>
<p>
<strong>Sample Output: </strong><br />
2<br />
3<br />
1</p>
<p>
<strong>Explanation</strong><br />
Firoz has 2 friends because:</p>
<p>Firoz has 3 enemies: Bobby, Johnny, Geeta<br />
Bobby has 4 enemies: Firoz, Amit, Johnny, lata<br />
Johnny has 2 enemies: Bobby, Firoz<br />
geeta has 2 enemies: lata, Firoz<br />
Therefore the enemies of the enemies of Firoz are Amit, Johnny, lata, Bobby, Firoz<br />
To be Firoz's friends they must not be his enemies so Johnny and Bobby must be removed<br />
Firoz cannot be his own friend so we remove Firoz from his friends<br />
So the friends of Firoz are Amit, lata: 2 friends</p>
<p>
<strong>Constraints:</strong><br />
0&lt;n&lt;10000<br />
0&lt;=p&lt;=50000<br />
1&lt;=q&lt;=10000<br />
the names will be atmost of length 20 consider names of different cases as different.</p>
<p>Time limit: 1 s</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sibashis">sibashis</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-03-2013</td>
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