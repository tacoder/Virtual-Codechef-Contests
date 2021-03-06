<?php require("../../includes/header.php"); ?><h1>Two Chefs</h1><div class="content">

<p>Two chefs are working in a kitchen with two ovens.<br />
Each chef has a list of dishes to prepare.<br />
Each chef must complete the dishes on his list, and in the order in which they appear on his list.<br />
The chefs have already prepared the items, and need only cook them.<br />
Each oven can only cook one dish at a time, and once a dish enters an oven it must remain in the oven for the full cooking time.<br />
A dish is considered completed when it is done cooking.<br />
That is, dishes need not enter the ovens in order, but must finish cooking in order<br />
(it is okay for 2 dishes from the same chef to finish cooking simultaneously).<br />
The chefs cannot clean up and go home until both of them have completed all their dishes,<br />
and they want to go home as soon as possible.<br />
Your task is to determine the minimal amount of time it will take the chefs to complete all dishes.</p>
<h3>Input:</h3>
<p>Input consists of 3 lines.<br />
The first line contains 2 integers N<sub>1</sub> and N<sub>2</sub>, the number of dishes to be completed by the<br />
first and second chefs, respectively.<br />
The second line contains N<sub>1</sub> integers giving the cooking times of the first chef's dishes,<br />
in the order in which they must be completed.<br />
The third line contains N<sub>2</sub> integers giving the cooking times of the second chef's dishes,<br />
in the order in which they must be completed.</p>
<h3>Output:</h3>

<p>Output on a single line the minimum amount of time (in minutes) for both<br />
chefs to complete all dishes.</p>
<h3>Example</h3>
<p><b>Input 1:</b></p>
<pre>4 4
20 20 25 25
40 10 10 40
 </pre>
<p><b>Ouput 1:</b></p>
<pre>100
 </pre>
<p>One way to finish in 100 minutes is for the one chef to cook all his dishes in one oven, and the other chef to cook all his dishes in the other oven.  Note that although the dishes could be cooked in only 95 minutes, they cannot be completed in the correct order in only 95 minutes.
</p>
<p><b>Input 2:</b></p>
<pre>3 1
15 16 21
10
 </pre>
<p><b>Output 2:</b></p>
<pre>31
 </pre>
<p>One oven will cook the 10 minute and 21 minute dishes, the other the 15 and 16 minute dishes.<br />
The first chef's third dish enters an oven before his second dish, but the dishes finish cooking at the same time<br />
and therefore are still considered to have completed in the correct order.</p>
<h3>Constraints:</h3>
<p>1 ≤ N<sub>1</sub> ≤ 50<br />
1 ≤ N<sub>2</sub> ≤ 50<br />
All cooking times are between 1 and 60 minutes, inclusive.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/maksflow">maksflow</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>