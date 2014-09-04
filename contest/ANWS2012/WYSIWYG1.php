<?php require("../../includes/header.php"); ?><h1>How Many Machines</h1><div class="content">

<p>John owns a machine manufacturing company. He manufactures 3 different types of machines. Each of the machine produces some fixed output units for some fixed input units.<br />
For instance say machine 1 produce 3 output units for 2 every input units, machine 2 produce 4 output units afor every 3 input units and machine 3 produce 6 units of output for every 4 input units.<br />
He is given an order from a company where the company wants a MINIMUM output of &ldquo;Y&rdquo; units for some input of MAXIMUM &ldquo;X&rdquo; units. He has to supply his 3 machines keeping in mind the order made by the company. Help him determine the number of 3 machines so that the total number of machines are minimum. However if more than one solutions exist there would be a priority sequence so that the machine i with higher priority must have more instances.<br />
<br />If no case is possible to satisfy the company's input-output demand, you should clearly mention &ldquo;No Case&rdquo;.</p>
<h3>Input</h3>
<p>First line of input will be number of test cases.For each case, input the description of all the three machines followed by the priorities for the three machines say-1 2 3 ( priority of machine 1 > priority of machine 2 > priority of machine 3 and hence<br />
machine 1 will have more instances than machine 2 or machine 3 in case of more than one answers ) and the total input and output units and give the output before going to the next test case.</p>
<h3>Output</h3>
<p>Number of all the three machines should be displayed separately for each of the test cases.</p>
<h3>Example</h3>
<pre><b>Input:
4
2    3
3    4
4    6
1    2    3
7    7
2    3
3    4
4    6
2    1    3
7    7
2    3
3    4
4    6
2    3    1
7    7
2    3
3    4
4    6
1    2    3
1    50</b>

<b>Output:
1    1    0
0    2    0
0    2    0
No Case</b>
</pre><p><br /><b>Explanation:</b><br />
First line is the no of test cases = 3. The next 3 lines describe the 3 types of machines ie the number of output units for number of input units. The line 1 2 3 tells the priority sequence: machine 1> machine 2> machine 3. 7 7 is input output information. 1 1 0 is the resultant output. In the second test case machine description is same but priority is 2 1 3: machine 2>machine1 >machine 3. 7 7 is input output information. 0 2 0 is resultant output. In the third test case machine description is again same but priority is 2 3 1: machine 2 > machine 3 > machine 1. The output will be 0 2 0 again. For the fourth case we expect an output of 50 on the input of 1 unit which is not possible using any combination of the machines described. </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ankit_tripathi">ankit_tripathi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 25 sec</td>
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