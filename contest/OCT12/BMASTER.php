<?php require("../../includes/header.php"); ?><h1>Blade Master</h1><div class="content">

<p>
Loda and Maelk are legendary ChefCraft players. They have played so many games that this number doesn't fit in </p>
<p>a standard 32-bit integer type. Today Loda and Maelk are going to sort the things out and find out who is the </p>
<p>greatest ChefCraft player ever. So the great fight is coming. There are a lot of different heroes you may </p>
<p>choose to play ChefCraft. Obviously every hero has his pros and cons. Loda perfectly plays Blade Master. His </p>
<p>main skill is to make mirror images of himself to spoof the enemy.
</p>
<p></p>
<p>
As every other popular game ChefCraft is played on a rectangular grid which consists of <b>N</b> rows and </p>
<p><b>M</b> columns. Rows of the grid are numbered by integers from <b>1</b> to <b>N</b>. So the upper row of the </p>
<p>grid has number <b>1</b> and the lower row has number <b>N</b>. The same holds for columns. They are numbered </p>
<p>by integers from <b>1</b> to <b>M</b> such that the most left column has number <b>1</b> while the most right </p>
<p>column has number <b>M</b>.
</p>
<p></p>
<p>
At the beginning of the game the only Blade Master's image stands on some starting cell <b>(Sx, Sy)</b> where </p>
<p><b>1 &le; Sx &le; N</b> and <b>1 &le; Sy &le; M</b>. Then Loda makes <b>T</b> moves. Maelk knows how the </p>
<p>distribution of images on the grid changes after each Loda's move. This happens according to the following </p>
<p>rules.
</p>
<p></p>
<p>
<b>1.</b> If there is an image standing on the cell <b>(i, j)</b> then the new images appear by the next </p>
<p>rules:
</p>
<p></p>
<ul>
<li>Let <b>F(i, j)</b> be the total number of images in the "cross" of the cell <b>(i, j)</b>. The "cross" of
<p>the cell <b>(i, j)</b> is union of all cells in the <b>i</b>-th row of the grid and in the <b>j</b>-th column </p>
<p>of the grid. So <b>N + M &minus; 1</b> cells belongs to the "cross".</p></li>
<li>Let <b>X = F(i, j) mod 6</b>, that is <b>X</b> is the remainder of the division of <b>F(i, j)</b> by
<p><b>6</b>.</p></li>
<li>For every possible value of <b>X</b> we have following values: <b>D1</b>, <b>D2</b>, <b>P1 </b> and
<p><b>P2</b>.</p></li>
<li><b>D1</b> and <b>D2</b> may be equal to one of the <b>4</b> values <b>['U', 'R', 'D', 'L']</b> and mean
<p>some two directions. Here <b>'U'</b> means <b>up</b>, <b>'R'</b> means <b>right</b>, <b>'D'</b> means </p>
<p><b>down</b> and <b>'L'</b> means <b>left</b>.</p></li>
<li><b>P1</b> and <b>P2</b> are integer numbers.</li>
<li>New mirror images will appear at every cell in the direction <b>D1</b> with the period <b>P1</b> starting
<p>from cell <b>(i, j)</b> and in the direction <b>D2</b> with the period <b>P2</b> also starting from the cell </p>
<p><b>(i, j)</b>. Of course, no images will appear out of the grid. For example, if <b>D1 = 'U'</b> and <b>P1 = </b></p>
<p>2 then images appear at the cells <b>(i &minus; 2, j), (i &minus; 4, j), (i &minus; 6, j)</b>, and so </p>
<p>on.</p></li>
<li>Loda always use the same values for <b>D1</b> and <b>D2</b>. Namely,<br />
<b>D1 = 'U', D2 = 'D'</b> for <b>X = 0,</b><br />
<b>D1 = 'L', D2 = 'R'</b> for <b>X = 1,</b><br />
<b>D1 = 'U', D2 = 'R'</b> for <b>X = 2,</b><br />
<b>D1 = 'R', D2 = 'D'</b> for <b>X = 3,</b><br />
<b>D1 = 'D', D2 = 'L'</b> for <b>X = 4,</b><br />
<b>D1 = 'L', D2 = 'U'</b> for <b>X = 5.</b></li>
<li>But values <b>P1</b> and <b>P2</b> may vary for different games. But once chosen they will be the same for
<p>all moves.</p></li>
</ul>
<p></p>
<p>
<b>2.</b> Appearing of new mirror images happens immediately.
</p>
<p></p>
<p>
<b>3.</b> Whenever there is more than one image at the cell they start one on one fights. In each fight two </p>
<p>images participate and both die. So if the number of images in the cell was even than all images will </p>
<p>disappear in the end, otherwise exactly one image will remain at this cell.
</p>
<p></p>
<p>
Now Maelk wants to choose his hero in order to win the fight. The most important thing he needs to know for </p>
<p>this is how the number of images changes during Loda's moves. So he asks you for help. Denote by <b>C(t)</b> </p>
<p>the number of images on the grid after the <b>t</b>-th Loda's move for <b>t</b> from <b>1</b> to <b>T</b>. For </p>
<p>convenience we denote <b>C(0) = 1</b> with meaning that <b>0</b>-th move is the putting of the only Blade </p>
<p>Master's image at the starting cell. Maelk wants you to calculate the sum <b>C(0) + C(1) + ... + C(T)</b>. </p>
<p>Since Maelk doesn't know what to expect from Loda he would like to know the answer for several values of </p>
<p><b>T</b>. As you remember the total number of games played by Maelk and Loda at ChefCraft doesn't fit in a </p>
<p>standard 32-bit integer type. Of course, the same can hold for the number of moves in their final fight. Since </p>
<p>Maelk plays ChefCraft the whole life he is not strong in math and can't calculate such large sums. So let's </p>
<p>help him to win the final fight and become the only ChefCraft master ever.
</p>
<h3>Input</h3>
<p>
The first line of the input contains three space separated integers <b>N</b>, <b>M </b> and <b>Q</b>. Here </p>
<p><b>N</b> and <b>M</b> are sizes of the grid described above and <b>Q</b> is the number of Maelk's queries. The </p>
<p>second line contains two space separated integers <b>Sx</b> and <b>Sy</b>, row index and column index of the </p>
<p>starting position of the first image. Each of the following six lines contains two space separated integers, </p>
<p>the values <b>P1</b> and <b>P2 </b> for the corresponding <b>X</b>, that is, <b>i</b>-th line among these six </p>
<p>lines contains values <b>P1</b> and <b>P2 </b> for <b>X = i &minus; 1</b>. Each of the following <b>Q</b> </p>
<p>lines contains a single integer <b>T</b>, the number of Loda's moves for the corresponding Maelk's query.
</p>
<h3>Output</h3>
<p>
For every Maelk's query output on a separate line the numbers of images Maelk will see during Loda's move.
</p>
<h3>Constrains</h3>
<p>
<b>N</b> and <b>M</b> are positive<br />
<b>N</b> &bull; <b>M</b> &le; <b>34</b><br />
<b>1</b> &le; <b>Sx</b> &le; <b>N</b><br />
<b>1</b> &le; <b>Sy</b> &le; <b>M</b><br />
<b>1</b> &le; <b>P1</b>, <b>P2</b> &le; <b>max{N, M}</b><br />
<b>1</b> &le; <b>Q</b> &le; <b>100</b><br />
<b>1</b> &le; <b>T</b> &le; <b>10<sup>16</sup></b>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3 3
1 1
1 1
1 1
1 1
1 1
1 1
1 1
1
2
3

<b>Output:</b>
4
12
17
</pre><h3>Explanation</h3>
<p>
The initial grid looks as follows:<br />
100<br />
000<br />
000<br />
Here '1' represents a cell with an image and '0' represents a free cell.</p>
<p>After the first move grid is<br />
111<br />
000<br />
000</p>
<p>After the second move grid is<br />
101<br />
111<br />
111</p>
<p>Finally, after the third move we have<br />
011<br />
101<br />
010</p>
<p>So after the first move Maelk will see <b>3</b> images, after the second move &ndash; <b>8</b> images and </p>
<p>after the third move &ndash; <b>5</b> images. Hence the answers for <b>T = 1, 2, 3</b> are <b>1 + 3 = 4</b>, </p>
<p><b>1 + 3 + 8 = 12</b> and <b>1 + 3 + 8 + 5 = 17</b> respectively.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-08-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3.5 sec</td>
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