<?php require("../../includes/header.php"); ?><h1>CAO Stage-3</h1><div class="content">
<h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/CAOS3.pdf ">here</a></h3>
<h3 id="problemstatement">Problem Statement</h3>
<p><strong>Past</strong></p>
<p>In the year 2048, the Virtual Reality Massively Multiplayer Online Role-Playing Game (VRMMORPG), <strong>Code Art Online (CAO)</strong>, is released. With the Chef Gear, a virtual reality helmet that stimulates the user's five senses via their brain, players can experience and control their in-game characters with their minds.</p>
<p>On August 2nd, 2048, all the players log in for the first time, and subsequently discover that they are unable to log out. They are then informed by Code Master, the creator of CAO, that if they wish to be free, they must reach the third stage game.</p>
<p>Kirito is a known star player of CAO. You are to help him log out.</p>
<p><strong>Present</strong></p>
<p><em>Stage 3</em></p>
<p>A map is described by a 2D grid of cells. Each cell is either a <strong>#</strong> or a <strong>^</strong>. <strong>#</strong> denotes a wall. A monster exists in a cell, if the cell is not a wall and the cell is a <strong>centre of Prime-Cross (CPC)</strong>.</p>
<p>A cell <strong>C</strong> is said to be a <strong>CPC</strong> if it satisfies the following property. Let <strong>L</strong> be the number of contiguous <strong>^</strong> to the left of <strong>C</strong>, in the same row as <strong>C</strong>, <strong>R</strong> be the number of contiguous <strong>^</strong> to the right of <strong>C</strong>, in the same row as <strong>C</strong>,  <strong>T</strong> be the number of contiguous <strong>^</strong> to the top of <strong>C</strong>, in the same column as <strong>C</strong>, <strong>B</strong> be the number of contiguous <strong>^</strong> to the bottom of <strong>C</strong>, in the same column as <strong>C</strong>, if there exists a prime number <strong>P</strong>, where <strong>P ≤ minimum of [L, R, T, B]</strong>, then <strong>C</strong> is said to be a <strong>CPC</strong>.</p>
<p>Kirito and Asuna decide to play the following game. Players alternate their turns. Asuna gets the first turn, Kirito being a gentleman allows ladies to have the first move. In a turn, players have to choose a cell where a monster resides and transform the cell into a volcano. The volcano immediately erupts filling all the cells in the same row and also all the cells in the same column with lava. Lava stops flowing past the cells which already have lava in them. The player who makes the last move wins.</p>
<p>Given that Kirito and Asuna both play optimally, you are to say who wins the game.</p>
<p><strong>Future</strong></p>
<p>Have fun solving the other tasks :-)</p>
<h3 id="input">Input</h3>
<p>The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows. Each case start with a line containing two space separated integers <strong>R, C</strong>, denoting the number of rows and columns in the map respectively. Followed by <strong>R</strong> lines containing <strong>C</strong> characters each, describing the map.</p>
<h3 id="output">Output</h3>
<p>For each test case, output a single line containing the the name of the winner. I.e. <strong>"Kirito" or "Asuna"</strong>.</p>
<h3 id="constraints">Constraints</h3>
<ul>
<li>1 ≤ T ≤ 10</li>
<li>1 ≤ R ≤ 20</li>
<li>1 ≤ C ≤ 20</li>
</ul>
<h3 id="example">Example</h3>
<pre>
<b>Input:</b>
1
7 7
^#^#^^^
^#^^^#^
^#^^^^^
^^^#^^^
^^^^^^^
^^^^^^^
^^^^^^^

<b>Output:</b>
Asuna
</pre><h3 id="explanation">Explanation</h3>
<p>This is the intial configuration, you can see the positions of monsters at CPC's.</p>
<p><img src="http://www.codechef.com/download/caos3-1.png" /> </p>
<p>
Asuna can win in 1 move if she decides to place the volcano in <b>(5, 5)</b> hence <b>Asuna wins in the example</b>. But for the sake of analysing a couple more moves lets assume she places the volcano on any of the other two monsters.<br />
It wouldn't make a difference as it would kill 2 monsters in any case. This is the first move Asuna places the volcano at <strong>(3, 5)</strong>, assume without any loss of generality.</p>
<p><img src="http://www.codechef.com/download/caos3-2.png" /> </p>
<p>Now, in this turn Kirito simply places the volcano on the remaining monster, in this case at <strong>(5, 3)</strong>, it kills the monster. Asuna can't place volcano at anyother position. Hence, Kirito wins.</p>
<p><img src="http://www.codechef.com/download/caos3-3.png" /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-07-2013</td>
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