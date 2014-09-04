<?php require("../../includes/header.php"); ?><h1>Martian Coin Game</h1><div class="content">

<p><i>Freakin' news has recently claimed that they have discovered a civilization on mars and that they have established contact with the martians. Following is a summary of the midnight hour breakin' news on freakin' news :</i></p>
<p><b>Playful Configuration</b> <br />
A configuration of n coins placed in a 2 × n grid (2 rows, n columns) such that every column contains exactly one coin is called a playful configuration.<br />
(Coins can only be placed inside a cell, and not on the boundary of two cells. Every coin is facing either heads-up or tails-up.)</p>
<p><b>One can update a playful configuration in the following ways :</b><br />
1) <b> switch(i, j) </b>, where 1&lt;=i&lt;=j&lt;=n :<br />
For all integers r such that i&lt;=r&lt;=j, do the following :<br />
If there is a coin at (1, r), remove it and place it, facing same side up at (2, r).<br />
Otherwise remove the coin at (2, r) and place it, facing same side up at (1, r).<br />
2) <b> flip(i, j) </b>, where 1&lt;=i&lt;=j&lt;=n :<br />
For all integers r such that i&lt;=r&lt;=j, do the following :<br />
Flip the coin in column r without changing its position. (If the coin is initially facing heads-up then after flipping it will face tails-up and vice versa.) </p>
<p><b>One can query a playful configuration in the following way :</b><br />
<b>query(i, j)</b> , where 1&lt;=i&lt;=j&lt;=n :<br />
Let h1 be the number of integers r such that i&lt;=r&lt;=j and there is a coin facing heads-up at (1,r).<br />
Let h2 be the number of integers r such that i&lt;=r&lt;=j and there is a coin facing heads-up at (2,r).<br />
Let t1 be the number of integers r such that i&lt;=r&lt;=j and there is a coin facing tails-up at (1,r).<br />
Let t2 be the number of integers r such that i&lt;=r&lt;=j and there is a coin facing tails-up at (2,r).<br />
query(i, j) returns h1,h2,t1 and t2.</p>
<p><b>The king of mars plays the following game every month :</b><br />
He arranges n coins in a playful configuration. Initially all coins are in the first row (facing either heads-up or tails-up). He periodically performs operations on the configurations. Each operation is either an update (flip or switch) or a query. Any player who responds correctly to each query wins a large prize. Unfortunately, the game is too difficult and no player has yet won the coveted prize.  </p>
<p>This month however, one of the ministers has gained access to the initial configuration as well as a list of all the operations. The minister has asked freakin' news to help him answer all queries correctly. <i>Your job is to do this task for freakin' news.</i></p>
<h3>Input Format </h3>

<p>The first line contains a single integer n : The number of coins in the playful configuration. </p>
<p>The next line contains n space seperated integers f[1],f[2],...f[n] which describe the inital state of the coins. The coin in column i is initially at (1,i). If f[i] is 1, the coin at (1,i) is initially facing heads-up. Otherwise, the coin at (1,i) is initially facing tails-up.</p>
<p>The next line contains a single integer m : The number of operations. </p>
<p>The k'th of the next m lines contains 3 integers op,i,j which describe the k'th operation. Each operation is described as follows :<br />
If op is 0, the operation is query(i,j).<br />
If op is 1, the operation is flip(i,j).<br />
If op is 2, the operation is switch(i,j).</p>
<h3>Output Format </h3>
<p>For each query, the program must output a single line consisting of 4 space seperated integers h1, h2, t1 and t2.</p>
<h3>Constraints </h3>
<p>1&lt;=n&lt;=100000<br />
Each f[i] is either 0 or 1.<br />
1&lt;=m&lt;=100000<br />
For each operation, op is either 0,1 or 2.<br />
For each operation, 1&lt;=i&lt;=j&lt;=n.</p>
<h3>Sample Input </h3>
<p>10<br />
1 1 1 1 1 0 0 0 0 0<br />
5<br />
0 1 7<br />
2 3 5<br />
0 1 7<br />
1 1 10<br />
0 1 7</p>
<h3>Sample Output </h3>
<p>5 0 2 0<br />
2 3 2 0<br />
2 0 2 3</p>
<h3>Explanation </h3>

<p>At the time of the first query, the configuration is :<br />
H H H H H T T T T T<br />
E E E E E E E E E E</p>
<p>At the time of the second query the configuration is :<br />
H H E E E T T T T T<br />
E E H H H E E E E E</p>
<p>At the time of the third query the configuration is :<br />
T T E E E H H H H H<br />
E E T T T E E E E E</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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