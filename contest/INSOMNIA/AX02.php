<?php require("../../includes/header.php"); ?><h1>Problem2</h1><div class="content">

<h1>PostFix Instructions to Assembly Code</h1>
<p>A very famous company requires a backend for a translator for a Simplified Instructional Computer.<br /> Input to the translator will be arithmetic expressions in postfix form and the output will be assembly language code.<br /></p>
<p>A single register will be present in the target machine along with the following instructions, where the operand is either an identifier or a storage location.<br /></p>
<pre>
    L -- load the operand into the register
    A -- add the operand to the contents of the register
    S -- subtract the operand from the contents of the register
    M -- multiply the contents of the register by the operand
    D -- divide the contents of the register by the operand
    N -- negate the contents of the register
    ST -- store the contents of the register in the operand location
</pre><p>The contents of the register are replaced with the expression result by an arithmetic operation. <br />Assembler allocates temporary storage locations for an operand of the form "$n" where n is a single digit.
</p>
<h3>Input</h3>
<p>The input file consists of several legitimate postfix expressions, each on A separate line. Expression operands are single letters and operators are the normaL arithmetic operators (+, -, *, /) </p>
<h3>Output</h3>
<pre>Output must be assembly language code that meets the following requirements:

   1. One instruction per line with the instruction mnemonic separated from the operand (if any) by one blank.
   2. One blank line must separate the assembly code for successive expressions.
   3. The originaL order of the operands must be preserved in the assembly code.
   4. Assembly code must be generated for each operator as soon as it is encountered.
   5. As few temporaries as possible shouL be used (given the above restrictions).
   6. For each operator in the expression, the minimum number of instructions must be generated (given the above restrictions). 
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
AB+CD+EF++GH+++
AB+CD+-

<b>Output:</b>
L A
A B
ST $1
L C
A D
ST $2
L E
A F
A $2
ST $2
L G
A H
A $2
A $1

L A
A B
ST $1
L C
A D
N
A $1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xpurgate">xpurgate</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>