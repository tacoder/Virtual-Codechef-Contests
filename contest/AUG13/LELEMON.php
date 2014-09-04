<?php require("../../includes/header.php"); ?><h1>Little Elephant and Lemonade</h1><div class="content">
<p>Little Elephant likes lemonade.

</p><p>When Little Elephant visits any room, he finds the bottle of the lemonade in that room that contains the greatest number of litres of lemonade and drinks it all.

</p><p>There are <b>n</b> rooms (numbered from <b>0</b> to <b>n-1</b>), each contains <b>C<sub>i</sub></b> bottles. Each bottle has a volume (in litres). The first room visited by Little Elephant was <b>P<sub>0</sub>-th</b>, the second - <b>P<sub>1</sub>-th</b>, ..., the <b>m-th</b> - <b>P<sub>m-1</sub>-th</b> room. Note that Little Elephant may visit a room more than once.

</p><p>Find for Little Elephant the total volume of lemonade he has drunk.

<h3>Input</h3>
</p><p>First line of the input contains single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. First line of each test case contains pair of integers <b>n</b> and <b>m</b>. Second line contains <b>m</b> integers separated by a single space - array <b>P</b>. Next <b>n</b> lines describe bottles in each room in such format: <b>C<sub>i</sub> V<sub>0</sub> V<sub>1</sub> ... V<sub>C<sub>i</sub>-1</sub></b>, where <b>V</b> is the list of volumes (in liters) of all bottles in <b>i-th</b> room.

<h3>Output</h3>
</p><p>In <b>T</b> lines print <b>T</b> integers - the answers for the corresponding test cases.

<h3>Constraints</h3>
</p><p>
1 &lt;= <b>T</b> &lt;= 10
</p><p>
1 &lt;= <b>n, C<sub>i</sub></b> &lt;= 100
</p><p>
1 &lt;= <b>m</b> &lt;= 10^4
</p><p>
0 &lt;= <b>P<sub>i</sub></b> &lt; n
</p><p>
1 &lt;= <b>V<sub>i</sub></b> &lt;= 10^5

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3 3
0 2 1
3 1 2 3
1 7
2 4 7
4 7
0 1 3 0 1 0 0
1 7
3 9 4 5
7 1 2 3 4 5 6 7
1 1

<b>Output:</b>
17
22

</pre></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-04-2012</td>
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