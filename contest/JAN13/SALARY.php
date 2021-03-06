<?php require("../../includes/header.php"); ?><h1>The Minimum Number Of Moves</h1><div class="content">

<p>Little chief has his own restaurant in the city. There are <b>N</b> workers there. Each worker has his own salary. The salary of the <b>i</b>-th worker equals to <b>W<sub>i</sub></b> (<b>i</b> = <b>1</b>, <b>2</b>, ..., <b>N</b>). Once, chief decided to equalize all workers, that is, he wants to make salaries of all workers to be equal. But for this goal he can use only one operation: choose some worker and increase by 1 salary of each worker, except the salary of the chosen worker. In other words, the chosen worker is the loser, who will be the only worker, whose salary will be not increased during this particular operation. But loser-worker can be different for different operations, of course. Chief can use this operation as many times as he wants. But he is a busy man. That's why he wants to minimize the total number of operations needed to equalize all workers. Your task is to find this number.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b> denoting the number of workers. The second line contains <b>N</b> space-separated integers <b> W<sub>1</sub></b>, <b>W<sub>2</sub></b>, ..., <b>W<sub>N</sub></b> denoting the salaries of the workers.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of operations needed to equalize all workers.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>100</b></li>
<li><b>1</b> &le; <b>N<sub></sub></b> &le; <b>100</b></li>
<li><b>0</b> &le; <b>W<sub>i</sub></b> &le; <b>10000</b> (<b>10<sup>4</sup></b>)</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
1 2 3
2
42 42

<b>Output:</b>
3
0
</pre><h3>Explanation</h3>
<p><b>Example Case 1.</b> Chief can equalize all salaries in 3 turns:</p>
<p><table border="1">
<tbody>
<tr>
<td>Turn ID</td>
<td>IDs of involved workers</td>
<td>Salaries after the move</td>
</tr>
<tr>
<td>1</td>
<td> 1 2</td>
<td> 2 3 3</td>
</tr>
<tr>
<td>2</td>
<td> 1 2</td>
<td> 3 4 3</td>
</tr>
<tr>
<td>3</td>
<td> 1 3</td>
<td> 4 4 4</td>
</tr>
</tbody>
</table>
</p>
<p><b>Example Case 2.</b> All salaries are already equal. He doesn't need to do anything.</p>
    </div><table border="1">
<tbody>
<tr>
<td>Turn ID</td>
<td>IDs of involved workers</td>
<td>Salaries after the move</td>
</tr>
<tr>
<td>1</td>
<td> 1 2</td>
<td> 2 3 3</td>
</tr>
<tr>
<td>2</td>
<td> 1 2</td>
<td> 3 4 3</td>
</tr>
<tr>
<td>3</td>
<td> 1 3</td>
<td> 4 4 4</td>
</tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ballon_ziq">ballon_ziq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-10-2012</td>
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