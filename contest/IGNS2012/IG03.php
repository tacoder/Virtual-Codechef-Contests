<?php require("../../includes/header.php"); ?><h1>The Forbidden Path</h1><div class="content">

<p>
Please use N,S,E,W in place of U,D,R,L.<br />
Laziness is the biggest and the only trait that our friend Kadka has. He is so lazy that even turning around is a pain in the leg [;)] for him. A complete idiot that he is, he cannot use his own mind and just follows directions. He is stuck in a maze and needs to get out. At every step he just follows the direction to the next position and thinks of nothing else.<br />
He always enters through the first row.<br />
The maze is like a grid</p>
<pre>
U 	R 	R 	D2 	L1 	R
L10  L9	 L 	R3 	D4 	D
D 	U8  	L7 	L6 	L5  	L
</pre><p>Where the numbers indicate the positions that were explored by Kadka.</p>
<pre>
R= Right
L=Left
U=Up
D=Down
</pre><p>In this case he gets out in 10 steps.</p>
<pre>
D1	R	D11	L10	R
R2	R3	D4	U9	L8
U	R	R5	R6	U7
L	R	D	R	L
</pre><p>In this case, after step 11, he enters into a loop he cannot exit.</p>
<h3>Input</h3>

<p>No. of Test Cases<br />
And for each case there will be:<br />
I=no. of rows j=no. of columns k=the column through which Kadka will enter  (I,j,k less than equal to10) and the<br />
The grid to solve </p>
<h3>Output</h3>

<p>For each case<br />
Number of steps taken to exit followed by letter ‘E’	OR<br />
 The size of the loop followed by letter ‘L’</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 6 5
URRDLR
LLLRDD
DULLLL
4 5 1
DRDLR
RRDUL
URRRU
LRDRL


<b>Output:</b>
10E
8L




<p>
By:
Chintan, Asad, Ashayam, Akanksha
</p>
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/chint7392">chint7392</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.8 sec</td>
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