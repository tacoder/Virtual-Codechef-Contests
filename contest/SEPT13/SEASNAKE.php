<?php require("../../includes/header.php"); ?><h1>Sereja and Snake</h1><div class="content">
<p>This problem is about the classical video game, called Snake.<br />We ask you to solve the simplified version of the game.</p>
<p>The rules are quite simple and natural, but they will be described here formally.</p>
<p>You are given a rectangular field of <b>N</b> rows and <b>M</b> columns. Cells in this field are identified by their coordinates.<br /> (<b>X</b>, <b>Y</b>) is co-ordinate of a cell in this field if <b>0 ≤ X ≤ N-1</b> and <b>0 ≤ Y ≤ M-1</b>, where <b>X</b> is row number of the cell and <b>Y</b> is column number of the cell.</p>
<p>There is a snake in the field. Initially it consists of a single cell, but it can grow. A Snake can be described by the sequence of distinct cells it occupies in the field, <b>(X<sub>1</sub>, Y<sub>1</sub>), (X<sub>2</sub>, Y<sub>2</sub>) ... (X<sub>K</sub>, Y<sub>K</sub>) </b>. The first cell of this sequence is called the <i>head</i> and the last cell is called its <i>tail</i>. Initially, the snake consists of a single cell (<b>0</b>, <b>0</b>), and this cell is the head as well as the tail at the same time.</p>
<p>The snake can make a move in four directions. The head cell (<b>X<sub>1</sub></b>, <b>Y<sub>1</sub></b>) can be moved to one of the cells ((<b>X<sub>1</sub></b>-1+<b>N</b>)%<b>N</b>, <b>Y<sub>1</sub></b>), ((<b>X<sub>1</sub></b>+1)%<b>N</b>, <b>Y<sub>1</sub></b>),<br /> (<b>X<sub>1</sub></b>, (<b>Y<sub>1</sub></b>-1+<b>M</b>)%<b>M</b>) or (<b>X<sub>1</sub></b>, (<b>Y<sub>1</sub></b>+1)%<b>M</b>), i.e. to one of the four neighbours. Let the coordinate of the new cell to which snake's head moves be <b>(X<sub>new</sub>, Y<sub>new</sub>)</b>. Then, there are two cases:</p>
<p><b>1</b>) The new cell <b>(X<sub>new</sub>, Y<sub>new</sub>)</b> contains an apple. In this case, the snake <i>eats</i> the apple, and the sequence describing the new state of snake becomes <b>(X<sub>new</sub>, Y<sub>new</sub>), (X<sub>1</sub>, Y<sub>1</sub>), (X<sub>2</sub>, Y<sub>2</sub>) ... (X<sub>K</sub>, Y<sub>K</sub>) </b>. That is, the new cell is appended to the beginning of the sequence by shifting all previous elements to the right. Obviously, the length of the snake will be increased by one after this move. Then, the apple is removed from this cell, and a new apple appears somewhere else.</p>
<p><b>2</b>) Otherwise, <i>first</i>, the length of snake is shortened by 1 by removing the tail. Then the new cell is appended to the beginning of the sequence, just like in previous case. In this case, the sequence describing the new state of snake becomes <b>(X<sub>new</sub>, Y<sub>new</sub>), (X<sub>1</sub>, Y<sub>1</sub>), (X<sub>2</sub>, Y<sub>2</sub>) ... (X<sub>K-1</sub>, Y<sub>K-1</sub>) </b>. The only difference from the previous case is that the tail cell will disappear, so the number of cells will not change. Note that <b>(X<sub>new</sub>, Y<sub>new</sub>)</b> can be same as <b>(X<sub>K</sub>, Y<sub>K</sub>)</b> in this case without causing any conflict. <b>(X<sub>K-1</sub>, Y<sub>K-1</sub>)</b> will become the new tail cell [unless <b>K=1</b> in which case <b>(X<sub>new</sub>, Y<sub>new</sub>)</b> will be the head as well as the tail].</p>
<p><b>N*M-1</b> apples will appear in the field. You are given the sequence of <b>N*M-1</b> cells (not necessarily distinct). Initially, there will be an apple in the first cell from the sequence. When the snake eats it, a new apple appears in the second cell from the sequence, and so on. Your goal here is to make the snake eat all the <b>N*M-1</b> apples in <i>minimal</i> number of moves.</p>
<p>It is guaranteed that the first apple will not appear in the cell (<b>0</b>, <b>0</b>). It is also guaranteed that any two consecutive cells from the sequence will not be the same. You can also assume that <b>N*M</b> is even.</p>
<p><b>Note</b></p>
<ul>
<li>You should move your snake in such a way that at all times, the sequence describing the snake has distinct elements.</li>
<li>The game is different from conventional video game because the new apple can arrive on a cell already occupied by the snake. This case is no different and the snake must <i>eat</i> this apple as well by moving its <i>head</i> to location of the apple.</li>
</ul>
<h3>Input</h3>
<p>The first line of the input consists of two numbers - <b>N</b> and <b>M</b>.<br /><br /> Then, <b>N*M-1</b> lines follow, the i-th such line consists of two integers - the coordinates of the cell where the <b>i</b>-th apple will appear.</p>
<h3>Output</h3>
<p>The first line of the output should contain <b>Q</b> - the number of moves. <b>Q</b> should not exceed <b>900000</b>.<br /><br /> Then, <b>Q</b> lines should follow. The <b>i</b>-th number should be equal to:<br /><br /> <b>0</b> - in case you move the head of the snake to the cell ((<b>X<sub>1</sub></b>-1+<b>N</b>)%<b>N</b>, <b>Y<sub>1</sub></b>)<br /><br /> <b>1</b> - in case you move the head of the snake to the cell ((<b>X<sub>1</sub></b>+1)%<b>N</b>, <b>Y<sub>1</sub></b>)<br /><br /> <b>2</b> - in case you move the head of the snake to the cell (<b>X<sub>1</sub></b>, (<b>Y<sub>1</sub></b>+<b>M</b>-1)%<b>M</b>)<br /><br /> <b>3</b> - in case you move the head of the snake to the cell (<b>X<sub>1</sub></b>, (<b>Y<sub>1</sub></b>+1)%<b>M</b>)</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li>1 &lt;= <b>N</b> &lt;= 30</li>
<li>1 &lt;= <b>M</b> &lt;= 30</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2 2
1 1
1 0
0 1

<b>Output:</b>
5
3 1 3 1 3

</pre>
<h3>Scoring &amp; the test data generation</h3>
<p>Your score is the number of the moves made, you should minimise it.<br /><br /> The sequence of the cells is generated randomly and the cells are distributed uniformly.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-08-2013</td>
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