<?php require("../../includes/header.php"); ?><h1>Dish Distribution</h1><div class="content">

<p>Chef feels that being the Head Chef is a very difficult job. More than cooking, managing the kitchen and distributing the work between various cooks proves to be a tiring task. There are many dishes to be prepared. And he has a team of talented cooks to do this for him. But the Chef always has a problem distributing tasks among them. For a cook i, the Chef wants to give him <i>atleast</i> xi dishes to prepare in a day. But different cooks have different capacities. Any cook i can cook <i>atmost</i> yi number of dishes in a single day. Chef is very aware of every cook's capability and will not give anyone more work than his maximum capacity. Now, he wants you to help him out here. </p>
<p>Your task will be simple: Tell him the number of ways in which he can distribute the given number of dishes among his team.</p>
<h3>Input:</h3>
<p>First line contains T, number of tests.<br />
Each test begins with a single line containing 2 space separated integers: n and m, the number of dishes to be prepared and the number of cooks in Chef's team.<br />
Then follow m lines. The ith line contains 2 space separater integers which are the corresponding xi and yi.</p>
<h3>Output:</h3>
<p>For every test case, output a single integer: the number of ways of distributing the work mod 1000000007.</p>
<h3>Constraints:</h3>
<p>1&lt;=T&lt;=50<br />
1&lt;=n,m&lt;=100<br />
0&lt;=xi,yi&lt;=100</p>
<h3>Example:</h3>
<p><b>Input</b><br />
1<br />
3 2<br />
0 3<br />
1 3</p>
<p><b>Output</b><br />
3</p>
<p><b>Explanation:</b><br />
The chef can distribute the dishes in the following ways- 0 and 3 ; 1 and 2 ; 2 and 1 .</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro">masked_zorro</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-08-2011</td>
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