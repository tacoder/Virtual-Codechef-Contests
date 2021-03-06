<?php require("../../includes/header.php"); ?><h1>Parallel Computing</h1><div class="content">

<p>Chef needs a program to solve a simple task. The program will start with an array of integers X. After the execution it should hold values X[1] + X[2] + ... + X[i] at all positions 1 &lt;= i &lt;= N. However, he wants this done fast and efficiently. He needs your help to output a program which can be executed in parallel on N machines and will produce a correct result. Note that he needs a program for some fixed size of array 1 &lt;= N &lt;= 1000.</p>
<p>A program consists of a series of synchronized steps. Instructions within one step are executed in parallel on multiple (at most N) machines which all have access to the shared memory where the array is located. You should not make any assumptions about the order in which these parallel instructions will be completed, but you can be sure that all instructions in the current step will be completed before any other instruction from the next step. There is only one type of instruction and it has the form "a+b=c". It reads the values X[a], X[b] and writes their sum in X[c]. The program should contain at most 20 steps and the total number of instructions should not exceed 2000.</p>
<h3>Input</h3>

<p>Input contains a single positive integer N.</p>
<h3>Output</h3>

<p>Output the number of steps in your program. In the following lines describe these steps. First output the number of instructions which should be executed in parallel on this step followed by a list of instructions. All items should be separated by a single space.</p>
<h3>Example</h3>

<p><pre>
<b>Input:</b>
6

<b>Output:</b>
3
2 1+2=2 4+5=5
2 2+3=3 5+6=6
3 3+4=4 3+5=5 3+6=6
</pre><h3>Explanation</h3>
</p>
<p>Lets name values in the array with letters from a to f. The table below describes contents of the array after each step:</p>
<table>
<tr>
<td> </td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>6</td>
</tr>
<tr>
<td>initial values:</td>
<td>a</td>
<td>b</td>
<td>c</td>
<td>d</td>
<td>e</td>
<td>f</td>
</tr>
<tr>
<td>after step 1:</td>
<td>a</td>
<td>a+b</td>
<td>c</td>
<td>d</td>
<td>d+e</td>
<td>f</td>
</tr>
<tr>
<td>after step 2:</td>
<td>a</td>
<td>a+b</td>
<td>a+b+c</td>
<td>d</td>
<td>d+e</td>
<td>d+e+f</td>
</tr>
<tr>
<td>after step 3:</td>
<td>a</td>
<td>a+b</td>
<td>a+b+c</td>
<td>a+b+c+d</td>
<td>a+b+c+d+e</td>
<td>a+b+c+d+e+f</td>
</tr>
</table>

    </div><table>
<tr>
<td> </td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>6</td>
</tr>
<tr>
<td>initial values:</td>
<td>a</td>
<td>b</td>
<td>c</td>
<td>d</td>
<td>e</td>
<td>f</td>
</tr>
<tr>
<td>after step 1:</td>
<td>a</td>
<td>a+b</td>
<td>c</td>
<td>d</td>
<td>d+e</td>
<td>f</td>
</tr>
<tr>
<td>after step 2:</td>
<td>a</td>
<td>a+b</td>
<td>a+b+c</td>
<td>d</td>
<td>d+e</td>
<td>d+e+f</td>
</tr>
<tr>
<td>after step 3:</td>
<td>a</td>
<td>a+b</td>
<td>a+b+c</td>
<td>a+b+c+d</td>
<td>a+b+c+d+e</td>
<td>a+b+c+d+e+f</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/thocevar">thocevar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-12-2011</td>
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