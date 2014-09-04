<?php require("../../includes/header.php"); ?><h1>Energy Drink</h1><div class="content">

<p><html><br />
<body></body></html></p>
<h1>Energy Drinks</h1>
<p>
Chef has made an energy drink, where 1 bottle of drink gives a person energy to move a single step. He has organized a game in which at each step, a certain number of bottles are kept. The no. of bottles at each step represent the maximum no. of steps he can go forward from that position.You can’t carry bottles from one step to other i.e. if number of bottles at a step is 3 then you can drink 0, 1, 2 or 3 bottles, if you drink 3 you have to take a jump(move) of 3 steps, you can’t drink 2 bottles and carry 1 to the other step.If the no. of drinks at a step is 0, than he cannot go further. His motive is to reach his destination by optimizing his drinking in such a way that he has to make minimum no. of moves. The person knows the no. of bottles kept at each step. 1 move represents moving from 1 drinking position to the next.
</p>
<h3>Input: </h3>
<p>
The first line contains a positive integer T representing no. of test cases. Each test case begins with a single positive integer N representing the no. of steps from beginning to the final position including both. The second line of each test case consists of a group of non-negative integers separated by space, which represent the no. of bottles kept at each step.
</p>
<h3>Output: </h3>
<p>
For each test case, output a single line, containing the answer for the corresponding test case.
</p>
<h3>
Constraint><br />
</h3>
<p>
1&amp;ltT&amp;lt10<br />
1&amp;ltN&amp;lt50
</p>
<h3>Sample Input</h3>
<p><pre>
3
11
1 3 5 8 9 2 6 7 6 8 9
10
1 3 6 3 2 3 6 8 9 5
6
1 3 6 1 0 9</pre></p>
<h3> Output-</h3>
<p><pre>
3 
4
3</pre></p>
<p>
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/opengeest">opengeest</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>5000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>