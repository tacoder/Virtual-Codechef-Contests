<?php require("../../includes/header.php"); ?><h1>Bishops</h1><div class="content">

<p>
Last night, the Chef had a strange dream. He got lost in a Chess Kingdom where the chess pieces lived together on a huge chess board. In that dream, the Chef met the King and asked him for help. Unfortunately, The King really admired the cooking skills of the Chef and wanted The Chef to cook for him every day. The King gave the Chef a task and said that the Chef could leave only after solving it. The task of the King required a lot of calculations and The Chef thought he would have to stay in the Chess Kingdom forever. Hopefully, the Chef woke up and realized that it was just a dream. No! Actually, it was a nightmare. The Chef could not sleep in the rest of the night, worrying that he might meet the King again. Thus, the Chef really needs your help to finish the task of the King.
</p>
<p>
The task that the King gave to the Chef is described as follows. The Chess Kingdom is a <b>N &times; N</b> chess board. The rows are numbered by integers from <b>1</b> to <b>N</b>, inclusive, from the top to the bottom. Similarly, the columns are numbered by integers from <b>1</b> to <b>N</b>, inclusive, from the left to the right. The cell at the intersection of the row <b>i</b> and the column <b>j</b> is denoted as cell <b>(i, j)</b>. The Chess Kingdom is guarded by <b>K</b> bishops standing at <b>K</b> different cells of the board. Additionally, There are <b>M</b> other chess pieces standing on <b>M</b> different cells on the board. The bishop can move any number of squares (maybe zero) diagonally, but can not leap over other pieces. In other words, a bishop at the cell <b>(a, b)</b> can move to the cell <b>(u, v)</b> if we can pick the vector <b>(x, y)</b> in the set <b>{(1, 1), (1, -1), (-1, 1), (-1, -1)}</b> so that <b>u = a + t * x</b> and <b>v = b + t * y</b> for some positive integer <b>t</b> and all the cells of the form <b>(a + i * x, b + i * y)</b> in which <b>1 &le; i &le; t</b> are empty. The cell is called safe if some of the bishops can move to this cell. In particular, all cells, where bishops stand, are safe. The Chef is required to find the number of safe cells.
</p>
<h3>Input</h3>
<p>
The first line of the input contains three space-separated integers  <b>N</b>, <b>K</b>, <b>M</b>. Each of the following <b>K</b> lines contains two space separated integers <b>X</b> and <b>Y</b>, meaning that the cell <b>(X, Y)</b> is occupied by the bishop. Each of the following <b>M</b> lines contains two space separated integers <b>U</b> and <b>V</b>, meaning that the cell <b>(U, V)</b> is occupied by other chess piece.
</p>
<h3>Output</h3>
<p>
Output a single line containing the number of safe cells.
</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> &le; <b>N</b> &le; <b>10<sup>9</sup></b></li>
<li><b>1</b> &le; <b>K</b> &le; <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>0</b> &le; <b>M</b> &le; <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>1</b> &le; <b>X</b>, <b>Y</b>, <b>U</b>, <b>V</b> &le; <b>N</b></li>
<li>Positions of all <b>K + M</b> chess pieces are distinct</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
8 2 2
5 4
4 6
2 4
7 3

<b>Output:</b>
22
</pre><h3>Explanation</h3>
<pre><code>
-------*
*--o--**
-*--***-
--*-*b--
---b*-*-
--***--*
-*o--*--
*-----*-
</code></pre>
<p>
Bishops are marked by 'b'.<br/> Other chess pieces are marked by 'o'.<br/> Safe cells other than bishop positions are marked by '*'.<br/> There are 20 '*'s plus two 'b's so the result is 22.<br />
</br/></br/></br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>