<?php require("../../includes/header.php"); ?><h1>Chain Reaction</h1><div class="content">
<p> </p>
<p>You get bored sometimes and love to play the game Chain reaction. This game is played upon a board of size RxC. Initially, the board is empty. In each turn, you can place an atom in any cell you want. After each turn, if the number of atoms in a cell becomes greater than 3, it will explode and one atom will spread to each of the four sides. If any other atoms remain( ie no of atoms &gt; 4), it remains in the same cell. As you can see, this will create a chain reaction if the adjacent cells contain 3 atoms already.</p>
<p> If explosion occurs at edge cells or corner cells, some atoms are lost permanently. This also makes sure that the board will always reach a stable state after some number of explosions. </p>
<p>     You will be given the board size and the state of the board after some moves. Next you will make N moves. Write a program that prints the final stable state of the board after N moves.
</p>
<h3>Input</h3>
<p>First line contains the number of test cases T.<br /><br />
First line of each test case will have 2 integers R and C, R is the row size, C is the column size.<br /><br />
Then R lines follow, each line containing C integers, denoting the number of atoms at that cell.<br /><br />
Next line will have a single integer N , the number of moves that you make<br />
N lines follow, each containing two integers, x and y denoting the cell (x, y) where you add a new atom.
</p>
<p> </p>
<h3>Output</h3>
<p>For each test case print the final state of the board.<br /><br />
It must contain R lines, each having C space separated integers. </p>
<p> </p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=100<br /><br />
2&lt;=R&lt;=20 , 2&lt;=C&lt;=20<br /><br />
Number of atoms in each cell will be less than 4. <br /><br />
0&lt;=x<br />
1&lt;=N&lt;=1000<br />
</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<p>1<br /><br />
5 5<br /><br />
0 0 0 0 0 <br /><br />
0 0 3 0 0<br /><br />
0 3 3 3 0<br /><br />
0 0 3 0 0<br /><br />
0 0 0 0 0<br /><br />
2<br /><br />
2 2<br /><br />
0 0<br />
</p>
<p><br /><br />
<b>Output:</b></p>
<p> 1 0 1 0 0<br /><br />
0 2 1 2 0<br /><br />
1 1 0 1 1<br /><br />
0 2 1 2 0<br /><br />
0 0 1 0 0<br />
</p>
<p><br /></p>
<h3>Explanation</h3>
<p> After adding the atom to (2, 2), it explodes which will cause all four adjacent cells (1, 2), (2, 1), (2, 3), (3, 2) to explode. This will lead to explosion of the cell (2, 2) for the second time as all those four cells sends back an atom to this cell.<br />
After adding the atom to (0, 0), no explosion occurs.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abacus_opc">abacus_opc</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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