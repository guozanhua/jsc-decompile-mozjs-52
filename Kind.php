<?php

/**
 * Created by PhpStorm.
 * User: irelance
 * Date: 2017/9/30
 * Time: 上午10:05
 */
class Kind
{
    const _Scope = [
        // FunctionScope
        'Function',
        // VarScope
        'FunctionBodyVar', 'ParameterExpressionVar',
        // LexicalScope
        'Lexical', 'SimpleCatch', 'Catch', 'NamedLambda', 'StrictNamedLambda',
        // WithScope
        'With',
        // EvalScope
        'Eval', 'StrictEval',
        // GlobalScope
        'Global', 'NonSyntactic',
        // ModuleScope
        'Module'
    ];

    const _Class = [
        'CK_RegexpObject',
        'CK_JSFunction',
        'CK_JSObject'
    ];

    const _ScriptBits=[
        'NoScriptRval',
        'Strict',
        'ContainsDynamicNameAccess',
        'FunHasExtensibleScope',
        'FunHasAnyAliasedFormal',
        'ArgumentsHasVarBinding',
        'NeedsArgsObj',
        'HasMappedArgsObj',
        'FunctionHasThisBinding',
        'FunctionHasExtraBodyVarScope',
        'IsGeneratorExp',
        'IsLegacyGenerator',
        'IsStarGenerator',
        'IsAsync',
        'OwnSource',
        'ExplicitUseStrict',
        'SelfHosted',
        'HasSingleton',
        'TreatAsRunOnce',
        'HasLazyScript',
        'HasNonSyntacticScope',
        'HasInnerFunctions',
        'NeedsHomeObject',
        'IsDerivedClassConstructor',
        'IsDefaultClassConstructor',
    ];

    const _FirstWordFlag =[
        'HasAtom'             => 0x1,
        'IsStarGenerator'     => 0x2,
        'IsLazy'              => 0x4,
        'HasSingletonType'    => 0x8
    ];
}