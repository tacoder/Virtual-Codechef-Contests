<?php require("../../includes/header.php"); ?><h1>Frosting Cupcakes</h1><div class="content">

<p>Now that Chef has streamlined his cupcake baking procedure,<br />
he's turning his attention toward frosting the cupcakes.<br />
He recently purchased a machine that produces frosting.<br />
Each cupcake requires one unit of frosting, and the frosting machine<br />
requires K<sup>2</sup> units of energy to produce K units of frosting<br />
in one minute (K need not be an integer).<br />
Cupcakes arrive in batches, once per minute, needing frosting.<br />
The cupcakes must be frosted within a minute of when they arrive.<br />
The frosting machine also has a reserve unit, so it can produce extra frosting<br />
to be used later.<br />
The reserve unit has a capacity of S units of frosting, and is initially empty.<br />
The machine may produce more units of frosting than is currently demanded, and<br />
the excess will be added to the reserve unit.<br />
Or, the machine can produce fewer units of frosting than is currently demanded,<br />
drawing the remainder of what is needed from the reserve.<br />
At all times the reserve unit must have between 0 and S units of frosting.</p>
<p>
Chef has a schedule ahead of time of exactly how many cupcakes<br />
will arrive each minute needing frosting, and can create a frosting production schedule for the machine that will optimize its energy usage.  The machine may produce a different amount of frosting each minute.<br />
Given the cupcake schedule, calculate the minimum energy needed to frost all<br />
the cupcakes divided by the total number of cupcakes.</p>
<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.<br />
Each test case begins with 2 integers N and S on a line, representing<br />
the number of minutes the machine will operate, and the capacity of the<br />
storage unit, respectively.<br />
Following is a line with N space-separated integers C<sub>0</sub>...C<sub>N-1</sub>,<br />
where C<sub>i</sub> is the number of cupcakes arriving at time i.</p>
<h3>Output</h3>
<p>For each test case, output on a single line the minimum total energy consumption<br />
of the machine divided by the total number of cupcakes, rounded to 5 places after the decimal point.</p>
<h3>Sample input</h3>
<pre>4
5 0
1 2 3 4 5
5 1
0 0 0 0 2
5 2
0 0 0 0 2
5 2
2 0 0 0 0
</pre><h3>Sample output</h3>
<pre>3.66667
0.62500
0.40000
2.00000
</pre><h3>Constraints</h3>
<p>T&lt;50<br />
1≤N≤30000<br />
0≤S≤30000<br />
0≤C<sub>i</sub>≤20000<br />
At least one C<sub>i</sub> will be non-zero</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-03-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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